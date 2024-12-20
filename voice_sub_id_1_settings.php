<?php
require_once(getabspath("classes/cipherer.php"));




$tdatavoice_sub_id_1 = array();
	$tdatavoice_sub_id_1[".truncateText"] = true;
	$tdatavoice_sub_id_1[".NumberOfChars"] = 80;
	$tdatavoice_sub_id_1[".ShortName"] = "voice_sub_id_1";
	$tdatavoice_sub_id_1[".OwnerID"] = "";
	$tdatavoice_sub_id_1[".OriginalTable"] = "voice_sub";

//	field labels
$fieldLabelsvoice_sub_id_1 = array();
$fieldToolTipsvoice_sub_id_1 = array();
$pageTitlesvoice_sub_id_1 = array();
$placeHoldersvoice_sub_id_1 = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsvoice_sub_id_1["Japanese"] = array();
	$fieldToolTipsvoice_sub_id_1["Japanese"] = array();
	$placeHoldersvoice_sub_id_1["Japanese"] = array();
	$pageTitlesvoice_sub_id_1["Japanese"] = array();
	$fieldLabelsvoice_sub_id_1["Japanese"]["id"] = "Id";
	$fieldToolTipsvoice_sub_id_1["Japanese"]["id"] = "";
	$placeHoldersvoice_sub_id_1["Japanese"]["id"] = "";
	$fieldLabelsvoice_sub_id_1["Japanese"]["voice_id"] = "記事ID";
	$fieldToolTipsvoice_sub_id_1["Japanese"]["voice_id"] = "";
	$placeHoldersvoice_sub_id_1["Japanese"]["voice_id"] = "";
	$fieldLabelsvoice_sub_id_1["Japanese"]["subject"] = "画像";
	$fieldToolTipsvoice_sub_id_1["Japanese"]["subject"] = "";
	$placeHoldersvoice_sub_id_1["Japanese"]["subject"] = "";
	$fieldLabelsvoice_sub_id_1["Japanese"]["link"] = "Link";
	$fieldToolTipsvoice_sub_id_1["Japanese"]["link"] = "";
	$placeHoldersvoice_sub_id_1["Japanese"]["link"] = "";
	$fieldLabelsvoice_sub_id_1["Japanese"]["date"] = "Date";
	$fieldToolTipsvoice_sub_id_1["Japanese"]["date"] = "";
	$placeHoldersvoice_sub_id_1["Japanese"]["date"] = "";
	$fieldLabelsvoice_sub_id_1["Japanese"]["zip_name"] = "Zip Name";
	$fieldToolTipsvoice_sub_id_1["Japanese"]["zip_name"] = "";
	$placeHoldersvoice_sub_id_1["Japanese"]["zip_name"] = "";
	$fieldLabelsvoice_sub_id_1["Japanese"]["goods_name"] = "Goods Name";
	$fieldToolTipsvoice_sub_id_1["Japanese"]["goods_name"] = "";
	$placeHoldersvoice_sub_id_1["Japanese"]["goods_name"] = "";
	$fieldLabelsvoice_sub_id_1["Japanese"]["cal_price"] = "Cal Price";
	$fieldToolTipsvoice_sub_id_1["Japanese"]["cal_price"] = "";
	$placeHoldersvoice_sub_id_1["Japanese"]["cal_price"] = "";
	$fieldLabelsvoice_sub_id_1["Japanese"]["goods_category"] = "Goods Category";
	$fieldToolTipsvoice_sub_id_1["Japanese"]["goods_category"] = "";
	$placeHoldersvoice_sub_id_1["Japanese"]["goods_category"] = "";
	$fieldLabelsvoice_sub_id_1["Japanese"]["brand"] = "Brand";
	$fieldToolTipsvoice_sub_id_1["Japanese"]["brand"] = "";
	$placeHoldersvoice_sub_id_1["Japanese"]["brand"] = "";
	$fieldLabelsvoice_sub_id_1["Japanese"]["brand_category"] = "Brand Category";
	$fieldToolTipsvoice_sub_id_1["Japanese"]["brand_category"] = "";
	$placeHoldersvoice_sub_id_1["Japanese"]["brand_category"] = "";
	$fieldLabelsvoice_sub_id_1["Japanese"]["hinmoku"] = "Hinmoku";
	$fieldToolTipsvoice_sub_id_1["Japanese"]["hinmoku"] = "";
	$placeHoldersvoice_sub_id_1["Japanese"]["hinmoku"] = "";
	$fieldLabelsvoice_sub_id_1["Japanese"]["page_category"] = "ページカテゴリー";
	$fieldToolTipsvoice_sub_id_1["Japanese"]["page_category"] = "";
	$placeHoldersvoice_sub_id_1["Japanese"]["page_category"] = "";
	$fieldLabelsvoice_sub_id_1["Japanese"]["page_num"] = "Page Num";
	$fieldToolTipsvoice_sub_id_1["Japanese"]["page_num"] = "";
	$placeHoldersvoice_sub_id_1["Japanese"]["page_num"] = "";
	$fieldLabelsvoice_sub_id_1["Japanese"]["page_master"] = "Page Master";
	$fieldToolTipsvoice_sub_id_1["Japanese"]["page_master"] = "";
	$placeHoldersvoice_sub_id_1["Japanese"]["page_master"] = "";
	$fieldLabelsvoice_sub_id_1["Japanese"]["page_regist"] = "Page Regist";
	$fieldToolTipsvoice_sub_id_1["Japanese"]["page_regist"] = "";
	$placeHoldersvoice_sub_id_1["Japanese"]["page_regist"] = "";
	$fieldLabelsvoice_sub_id_1["Japanese"]["detail"] = "Detail";
	$fieldToolTipsvoice_sub_id_1["Japanese"]["detail"] = "";
	$placeHoldersvoice_sub_id_1["Japanese"]["detail"] = "";
	$fieldLabelsvoice_sub_id_1["Japanese"]["seq"] = "Seq";
	$fieldToolTipsvoice_sub_id_1["Japanese"]["seq"] = "";
	$placeHoldersvoice_sub_id_1["Japanese"]["seq"] = "";
	$fieldLabelsvoice_sub_id_1["Japanese"]["preview_dia"] = "Preview Dia";
	$fieldToolTipsvoice_sub_id_1["Japanese"]["preview_dia"] = "";
	$placeHoldersvoice_sub_id_1["Japanese"]["preview_dia"] = "";
	$fieldLabelsvoice_sub_id_1["Japanese"]["preview_kin"] = "Preview Kin";
	$fieldToolTipsvoice_sub_id_1["Japanese"]["preview_kin"] = "";
	$placeHoldersvoice_sub_id_1["Japanese"]["preview_kin"] = "";
	$fieldLabelsvoice_sub_id_1["Japanese"]["preview_brand"] = "Preview Brand";
	$fieldToolTipsvoice_sub_id_1["Japanese"]["preview_brand"] = "";
	$placeHoldersvoice_sub_id_1["Japanese"]["preview_brand"] = "";
	$fieldLabelsvoice_sub_id_1["Japanese"]["preview_dia_tegami"] = "ダイヤ手紙表示";
	$fieldToolTipsvoice_sub_id_1["Japanese"]["preview_dia_tegami"] = "";
	$placeHoldersvoice_sub_id_1["Japanese"]["preview_dia_tegami"] = "";
	$fieldLabelsvoice_sub_id_1["Japanese"]["preveiw_kin_tegami"] = "金手紙表示";
	$fieldToolTipsvoice_sub_id_1["Japanese"]["preveiw_kin_tegami"] = "";
	$placeHoldersvoice_sub_id_1["Japanese"]["preveiw_kin_tegami"] = "";
	$fieldLabelsvoice_sub_id_1["Japanese"]["preview_kin_brand"] = "Preview Kin Brand";
	$fieldToolTipsvoice_sub_id_1["Japanese"]["preview_kin_brand"] = "";
	$placeHoldersvoice_sub_id_1["Japanese"]["preview_kin_brand"] = "";
	$fieldLabelsvoice_sub_id_1["Japanese"]["dia_jisseki_id"] = "Dia Jisseki Id";
	$fieldToolTipsvoice_sub_id_1["Japanese"]["dia_jisseki_id"] = "";
	$placeHoldersvoice_sub_id_1["Japanese"]["dia_jisseki_id"] = "";
	$fieldLabelsvoice_sub_id_1["Japanese"]["did_grade"] = "Did Grade";
	$fieldToolTipsvoice_sub_id_1["Japanese"]["did_grade"] = "";
	$placeHoldersvoice_sub_id_1["Japanese"]["did_grade"] = "";
	$fieldLabelsvoice_sub_id_1["Japanese"]["dia_kanteisho"] = "Dia Kanteisho";
	$fieldToolTipsvoice_sub_id_1["Japanese"]["dia_kanteisho"] = "";
	$placeHoldersvoice_sub_id_1["Japanese"]["dia_kanteisho"] = "";
	$fieldLabelsvoice_sub_id_1["Japanese"]["dia_okyakusama_shousai"] = "Dia Okyakusama Shousai";
	$fieldToolTipsvoice_sub_id_1["Japanese"]["dia_okyakusama_shousai"] = "";
	$placeHoldersvoice_sub_id_1["Japanese"]["dia_okyakusama_shousai"] = "";
	$fieldLabelsvoice_sub_id_1["Japanese"]["dia_otorihiki_keiai"] = "Dia Otorihiki Keiai";
	$fieldToolTipsvoice_sub_id_1["Japanese"]["dia_otorihiki_keiai"] = "";
	$placeHoldersvoice_sub_id_1["Japanese"]["dia_otorihiki_keiai"] = "";
	$fieldLabelsvoice_sub_id_1["Japanese"]["dia_souhyou"] = "Dia Souhyou";
	$fieldToolTipsvoice_sub_id_1["Japanese"]["dia_souhyou"] = "";
	$placeHoldersvoice_sub_id_1["Japanese"]["dia_souhyou"] = "";
	$fieldLabelsvoice_sub_id_1["Japanese"]["category_1"] = "Category 1";
	$fieldToolTipsvoice_sub_id_1["Japanese"]["category_1"] = "";
	$placeHoldersvoice_sub_id_1["Japanese"]["category_1"] = "";
	$fieldLabelsvoice_sub_id_1["Japanese"]["category_2"] = "Category 2";
	$fieldToolTipsvoice_sub_id_1["Japanese"]["category_2"] = "";
	$placeHoldersvoice_sub_id_1["Japanese"]["category_2"] = "";
	$fieldLabelsvoice_sub_id_1["Japanese"]["category_21"] = "Category 21";
	$fieldToolTipsvoice_sub_id_1["Japanese"]["category_21"] = "";
	$placeHoldersvoice_sub_id_1["Japanese"]["category_21"] = "";
	$fieldLabelsvoice_sub_id_1["Japanese"]["category_22"] = "Category 22";
	$fieldToolTipsvoice_sub_id_1["Japanese"]["category_22"] = "";
	$placeHoldersvoice_sub_id_1["Japanese"]["category_22"] = "";
	$fieldLabelsvoice_sub_id_1["Japanese"]["category_31"] = "Category 31";
	$fieldToolTipsvoice_sub_id_1["Japanese"]["category_31"] = "";
	$placeHoldersvoice_sub_id_1["Japanese"]["category_31"] = "";
	$fieldLabelsvoice_sub_id_1["Japanese"]["category_32"] = "Category 32";
	$fieldToolTipsvoice_sub_id_1["Japanese"]["category_32"] = "";
	$placeHoldersvoice_sub_id_1["Japanese"]["category_32"] = "";
	$fieldLabelsvoice_sub_id_1["Japanese"]["img_pass"] = "Img Pass";
	$fieldToolTipsvoice_sub_id_1["Japanese"]["img_pass"] = "";
	$placeHoldersvoice_sub_id_1["Japanese"]["img_pass"] = "";
	$fieldLabelsvoice_sub_id_1["Japanese"]["href_pass"] = "Href Pass";
	$fieldToolTipsvoice_sub_id_1["Japanese"]["href_pass"] = "";
	$placeHoldersvoice_sub_id_1["Japanese"]["href_pass"] = "";
	$fieldLabelsvoice_sub_id_1["Japanese"]["voice_date"] = "Voice Date";
	$fieldToolTipsvoice_sub_id_1["Japanese"]["voice_date"] = "";
	$placeHoldersvoice_sub_id_1["Japanese"]["voice_date"] = "";
	if (count($fieldToolTipsvoice_sub_id_1["Japanese"]))
		$tdatavoice_sub_id_1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsvoice_sub_id_1[""] = array();
	$fieldToolTipsvoice_sub_id_1[""] = array();
	$placeHoldersvoice_sub_id_1[""] = array();
	$pageTitlesvoice_sub_id_1[""] = array();
	$fieldLabelsvoice_sub_id_1[""]["id"] = "Id";
	$fieldToolTipsvoice_sub_id_1[""]["id"] = "";
	$placeHoldersvoice_sub_id_1[""]["id"] = "";
	$fieldLabelsvoice_sub_id_1[""]["voice_id"] = "Voice Id";
	$fieldToolTipsvoice_sub_id_1[""]["voice_id"] = "";
	$placeHoldersvoice_sub_id_1[""]["voice_id"] = "";
	$fieldLabelsvoice_sub_id_1[""]["subject"] = "Subject";
	$fieldToolTipsvoice_sub_id_1[""]["subject"] = "";
	$placeHoldersvoice_sub_id_1[""]["subject"] = "";
	$fieldLabelsvoice_sub_id_1[""]["link"] = "Link";
	$fieldToolTipsvoice_sub_id_1[""]["link"] = "";
	$placeHoldersvoice_sub_id_1[""]["link"] = "";
	$fieldLabelsvoice_sub_id_1[""]["date"] = "Date";
	$fieldToolTipsvoice_sub_id_1[""]["date"] = "";
	$placeHoldersvoice_sub_id_1[""]["date"] = "";
	$fieldLabelsvoice_sub_id_1[""]["zip_name"] = "Zip Name";
	$fieldToolTipsvoice_sub_id_1[""]["zip_name"] = "";
	$placeHoldersvoice_sub_id_1[""]["zip_name"] = "";
	$fieldLabelsvoice_sub_id_1[""]["goods_name"] = "Goods Name";
	$fieldToolTipsvoice_sub_id_1[""]["goods_name"] = "";
	$placeHoldersvoice_sub_id_1[""]["goods_name"] = "";
	$fieldLabelsvoice_sub_id_1[""]["cal_price"] = "Cal Price";
	$fieldToolTipsvoice_sub_id_1[""]["cal_price"] = "";
	$placeHoldersvoice_sub_id_1[""]["cal_price"] = "";
	$fieldLabelsvoice_sub_id_1[""]["goods_category"] = "Goods Category";
	$fieldToolTipsvoice_sub_id_1[""]["goods_category"] = "";
	$placeHoldersvoice_sub_id_1[""]["goods_category"] = "";
	$fieldLabelsvoice_sub_id_1[""]["brand"] = "Brand";
	$fieldToolTipsvoice_sub_id_1[""]["brand"] = "";
	$placeHoldersvoice_sub_id_1[""]["brand"] = "";
	$fieldLabelsvoice_sub_id_1[""]["brand_category"] = "Brand Category";
	$fieldToolTipsvoice_sub_id_1[""]["brand_category"] = "";
	$placeHoldersvoice_sub_id_1[""]["brand_category"] = "";
	$fieldLabelsvoice_sub_id_1[""]["hinmoku"] = "Hinmoku";
	$fieldToolTipsvoice_sub_id_1[""]["hinmoku"] = "";
	$placeHoldersvoice_sub_id_1[""]["hinmoku"] = "";
	$fieldLabelsvoice_sub_id_1[""]["page_category"] = "Page Category";
	$fieldToolTipsvoice_sub_id_1[""]["page_category"] = "";
	$placeHoldersvoice_sub_id_1[""]["page_category"] = "";
	$fieldLabelsvoice_sub_id_1[""]["page_num"] = "Page Num";
	$fieldToolTipsvoice_sub_id_1[""]["page_num"] = "";
	$placeHoldersvoice_sub_id_1[""]["page_num"] = "";
	$fieldLabelsvoice_sub_id_1[""]["page_master"] = "Page Master";
	$fieldToolTipsvoice_sub_id_1[""]["page_master"] = "";
	$placeHoldersvoice_sub_id_1[""]["page_master"] = "";
	$fieldLabelsvoice_sub_id_1[""]["page_regist"] = "Page Regist";
	$fieldToolTipsvoice_sub_id_1[""]["page_regist"] = "";
	$placeHoldersvoice_sub_id_1[""]["page_regist"] = "";
	$fieldLabelsvoice_sub_id_1[""]["detail"] = "Detail";
	$fieldToolTipsvoice_sub_id_1[""]["detail"] = "";
	$placeHoldersvoice_sub_id_1[""]["detail"] = "";
	$fieldLabelsvoice_sub_id_1[""]["seq"] = "Seq";
	$fieldToolTipsvoice_sub_id_1[""]["seq"] = "";
	$placeHoldersvoice_sub_id_1[""]["seq"] = "";
	$fieldLabelsvoice_sub_id_1[""]["preview_dia"] = "Preview Dia";
	$fieldToolTipsvoice_sub_id_1[""]["preview_dia"] = "";
	$placeHoldersvoice_sub_id_1[""]["preview_dia"] = "";
	$fieldLabelsvoice_sub_id_1[""]["preview_kin"] = "Preview Kin";
	$fieldToolTipsvoice_sub_id_1[""]["preview_kin"] = "";
	$placeHoldersvoice_sub_id_1[""]["preview_kin"] = "";
	$fieldLabelsvoice_sub_id_1[""]["preview_brand"] = "Preview Brand";
	$fieldToolTipsvoice_sub_id_1[""]["preview_brand"] = "";
	$placeHoldersvoice_sub_id_1[""]["preview_brand"] = "";
	$fieldLabelsvoice_sub_id_1[""]["preview_dia_tegami"] = "Preview Dia Tegami";
	$fieldToolTipsvoice_sub_id_1[""]["preview_dia_tegami"] = "";
	$placeHoldersvoice_sub_id_1[""]["preview_dia_tegami"] = "";
	$fieldLabelsvoice_sub_id_1[""]["preveiw_kin_tegami"] = "Preveiw Kin Tegami";
	$fieldToolTipsvoice_sub_id_1[""]["preveiw_kin_tegami"] = "";
	$placeHoldersvoice_sub_id_1[""]["preveiw_kin_tegami"] = "";
	$fieldLabelsvoice_sub_id_1[""]["preview_kin_brand"] = "Preview Kin Brand";
	$fieldToolTipsvoice_sub_id_1[""]["preview_kin_brand"] = "";
	$placeHoldersvoice_sub_id_1[""]["preview_kin_brand"] = "";
	$fieldLabelsvoice_sub_id_1[""]["dia_jisseki_id"] = "Dia Jisseki Id";
	$fieldToolTipsvoice_sub_id_1[""]["dia_jisseki_id"] = "";
	$placeHoldersvoice_sub_id_1[""]["dia_jisseki_id"] = "";
	$fieldLabelsvoice_sub_id_1[""]["did_grade"] = "Did Grade";
	$fieldToolTipsvoice_sub_id_1[""]["did_grade"] = "";
	$placeHoldersvoice_sub_id_1[""]["did_grade"] = "";
	$fieldLabelsvoice_sub_id_1[""]["dia_kanteisho"] = "Dia Kanteisho";
	$fieldToolTipsvoice_sub_id_1[""]["dia_kanteisho"] = "";
	$placeHoldersvoice_sub_id_1[""]["dia_kanteisho"] = "";
	$fieldLabelsvoice_sub_id_1[""]["dia_okyakusama_shousai"] = "Dia Okyakusama Shousai";
	$fieldToolTipsvoice_sub_id_1[""]["dia_okyakusama_shousai"] = "";
	$placeHoldersvoice_sub_id_1[""]["dia_okyakusama_shousai"] = "";
	$fieldLabelsvoice_sub_id_1[""]["dia_otorihiki_keiai"] = "Dia Otorihiki Keiai";
	$fieldToolTipsvoice_sub_id_1[""]["dia_otorihiki_keiai"] = "";
	$placeHoldersvoice_sub_id_1[""]["dia_otorihiki_keiai"] = "";
	$fieldLabelsvoice_sub_id_1[""]["dia_souhyou"] = "Dia Souhyou";
	$fieldToolTipsvoice_sub_id_1[""]["dia_souhyou"] = "";
	$placeHoldersvoice_sub_id_1[""]["dia_souhyou"] = "";
	$fieldLabelsvoice_sub_id_1[""]["category_1"] = "Category 1";
	$fieldToolTipsvoice_sub_id_1[""]["category_1"] = "";
	$placeHoldersvoice_sub_id_1[""]["category_1"] = "";
	$fieldLabelsvoice_sub_id_1[""]["category_2"] = "Category 2";
	$fieldToolTipsvoice_sub_id_1[""]["category_2"] = "";
	$placeHoldersvoice_sub_id_1[""]["category_2"] = "";
	$fieldLabelsvoice_sub_id_1[""]["category_21"] = "Category 21";
	$fieldToolTipsvoice_sub_id_1[""]["category_21"] = "";
	$placeHoldersvoice_sub_id_1[""]["category_21"] = "";
	$fieldLabelsvoice_sub_id_1[""]["category_22"] = "Category 22";
	$fieldToolTipsvoice_sub_id_1[""]["category_22"] = "";
	$placeHoldersvoice_sub_id_1[""]["category_22"] = "";
	$fieldLabelsvoice_sub_id_1[""]["category_31"] = "Category 31";
	$fieldToolTipsvoice_sub_id_1[""]["category_31"] = "";
	$placeHoldersvoice_sub_id_1[""]["category_31"] = "";
	$fieldLabelsvoice_sub_id_1[""]["category_32"] = "Category 32";
	$fieldToolTipsvoice_sub_id_1[""]["category_32"] = "";
	$placeHoldersvoice_sub_id_1[""]["category_32"] = "";
	$fieldLabelsvoice_sub_id_1[""]["img_pass"] = "Img Pass";
	$fieldToolTipsvoice_sub_id_1[""]["img_pass"] = "";
	$placeHoldersvoice_sub_id_1[""]["img_pass"] = "";
	$fieldLabelsvoice_sub_id_1[""]["href_pass"] = "Href Pass";
	$fieldToolTipsvoice_sub_id_1[""]["href_pass"] = "";
	$placeHoldersvoice_sub_id_1[""]["href_pass"] = "";
	$fieldLabelsvoice_sub_id_1[""]["voice_date"] = "Voice Date";
	$fieldToolTipsvoice_sub_id_1[""]["voice_date"] = "";
	$placeHoldersvoice_sub_id_1[""]["voice_date"] = "";
	if (count($fieldToolTipsvoice_sub_id_1[""]))
		$tdatavoice_sub_id_1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsvoice_sub_id_1["English"] = array();
	$fieldToolTipsvoice_sub_id_1["English"] = array();
	$placeHoldersvoice_sub_id_1["English"] = array();
	$pageTitlesvoice_sub_id_1["English"] = array();
	$fieldLabelsvoice_sub_id_1["English"]["id"] = "Id";
	$fieldToolTipsvoice_sub_id_1["English"]["id"] = "";
	$placeHoldersvoice_sub_id_1["English"]["id"] = "";
	$fieldLabelsvoice_sub_id_1["English"]["voice_id"] = "Voice Id";
	$fieldToolTipsvoice_sub_id_1["English"]["voice_id"] = "";
	$placeHoldersvoice_sub_id_1["English"]["voice_id"] = "";
	$fieldLabelsvoice_sub_id_1["English"]["subject"] = "Subject";
	$fieldToolTipsvoice_sub_id_1["English"]["subject"] = "";
	$placeHoldersvoice_sub_id_1["English"]["subject"] = "";
	$fieldLabelsvoice_sub_id_1["English"]["link"] = "Link";
	$fieldToolTipsvoice_sub_id_1["English"]["link"] = "";
	$placeHoldersvoice_sub_id_1["English"]["link"] = "";
	$fieldLabelsvoice_sub_id_1["English"]["date"] = "Date";
	$fieldToolTipsvoice_sub_id_1["English"]["date"] = "";
	$placeHoldersvoice_sub_id_1["English"]["date"] = "";
	$fieldLabelsvoice_sub_id_1["English"]["zip_name"] = "Zip Name";
	$fieldToolTipsvoice_sub_id_1["English"]["zip_name"] = "";
	$placeHoldersvoice_sub_id_1["English"]["zip_name"] = "";
	$fieldLabelsvoice_sub_id_1["English"]["goods_name"] = "Goods Name";
	$fieldToolTipsvoice_sub_id_1["English"]["goods_name"] = "";
	$placeHoldersvoice_sub_id_1["English"]["goods_name"] = "";
	$fieldLabelsvoice_sub_id_1["English"]["cal_price"] = "Cal Price";
	$fieldToolTipsvoice_sub_id_1["English"]["cal_price"] = "";
	$placeHoldersvoice_sub_id_1["English"]["cal_price"] = "";
	$fieldLabelsvoice_sub_id_1["English"]["goods_category"] = "Goods Category";
	$fieldToolTipsvoice_sub_id_1["English"]["goods_category"] = "";
	$placeHoldersvoice_sub_id_1["English"]["goods_category"] = "";
	$fieldLabelsvoice_sub_id_1["English"]["brand"] = "Brand";
	$fieldToolTipsvoice_sub_id_1["English"]["brand"] = "";
	$placeHoldersvoice_sub_id_1["English"]["brand"] = "";
	$fieldLabelsvoice_sub_id_1["English"]["brand_category"] = "Brand Category";
	$fieldToolTipsvoice_sub_id_1["English"]["brand_category"] = "";
	$placeHoldersvoice_sub_id_1["English"]["brand_category"] = "";
	$fieldLabelsvoice_sub_id_1["English"]["hinmoku"] = "Hinmoku";
	$fieldToolTipsvoice_sub_id_1["English"]["hinmoku"] = "";
	$placeHoldersvoice_sub_id_1["English"]["hinmoku"] = "";
	$fieldLabelsvoice_sub_id_1["English"]["page_category"] = "Page Category";
	$fieldToolTipsvoice_sub_id_1["English"]["page_category"] = "";
	$placeHoldersvoice_sub_id_1["English"]["page_category"] = "";
	$fieldLabelsvoice_sub_id_1["English"]["page_num"] = "Page Num";
	$fieldToolTipsvoice_sub_id_1["English"]["page_num"] = "";
	$placeHoldersvoice_sub_id_1["English"]["page_num"] = "";
	$fieldLabelsvoice_sub_id_1["English"]["page_master"] = "Page Master";
	$fieldToolTipsvoice_sub_id_1["English"]["page_master"] = "";
	$placeHoldersvoice_sub_id_1["English"]["page_master"] = "";
	$fieldLabelsvoice_sub_id_1["English"]["page_regist"] = "Page Regist";
	$fieldToolTipsvoice_sub_id_1["English"]["page_regist"] = "";
	$placeHoldersvoice_sub_id_1["English"]["page_regist"] = "";
	$fieldLabelsvoice_sub_id_1["English"]["detail"] = "Detail";
	$fieldToolTipsvoice_sub_id_1["English"]["detail"] = "";
	$placeHoldersvoice_sub_id_1["English"]["detail"] = "";
	$fieldLabelsvoice_sub_id_1["English"]["seq"] = "Seq";
	$fieldToolTipsvoice_sub_id_1["English"]["seq"] = "";
	$placeHoldersvoice_sub_id_1["English"]["seq"] = "";
	$fieldLabelsvoice_sub_id_1["English"]["preview_dia"] = "Preview Dia";
	$fieldToolTipsvoice_sub_id_1["English"]["preview_dia"] = "";
	$placeHoldersvoice_sub_id_1["English"]["preview_dia"] = "";
	$fieldLabelsvoice_sub_id_1["English"]["preview_kin"] = "Preview Kin";
	$fieldToolTipsvoice_sub_id_1["English"]["preview_kin"] = "";
	$placeHoldersvoice_sub_id_1["English"]["preview_kin"] = "";
	$fieldLabelsvoice_sub_id_1["English"]["preview_brand"] = "Preview Brand";
	$fieldToolTipsvoice_sub_id_1["English"]["preview_brand"] = "";
	$placeHoldersvoice_sub_id_1["English"]["preview_brand"] = "";
	$fieldLabelsvoice_sub_id_1["English"]["preview_dia_tegami"] = "Preview Dia Tegami";
	$fieldToolTipsvoice_sub_id_1["English"]["preview_dia_tegami"] = "";
	$placeHoldersvoice_sub_id_1["English"]["preview_dia_tegami"] = "";
	$fieldLabelsvoice_sub_id_1["English"]["preveiw_kin_tegami"] = "Preveiw Kin Tegami";
	$fieldToolTipsvoice_sub_id_1["English"]["preveiw_kin_tegami"] = "";
	$placeHoldersvoice_sub_id_1["English"]["preveiw_kin_tegami"] = "";
	$fieldLabelsvoice_sub_id_1["English"]["preview_kin_brand"] = "Preview Kin Brand";
	$fieldToolTipsvoice_sub_id_1["English"]["preview_kin_brand"] = "";
	$placeHoldersvoice_sub_id_1["English"]["preview_kin_brand"] = "";
	$fieldLabelsvoice_sub_id_1["English"]["dia_jisseki_id"] = "Dia Jisseki Id";
	$fieldToolTipsvoice_sub_id_1["English"]["dia_jisseki_id"] = "";
	$placeHoldersvoice_sub_id_1["English"]["dia_jisseki_id"] = "";
	$fieldLabelsvoice_sub_id_1["English"]["did_grade"] = "Did Grade";
	$fieldToolTipsvoice_sub_id_1["English"]["did_grade"] = "";
	$placeHoldersvoice_sub_id_1["English"]["did_grade"] = "";
	$fieldLabelsvoice_sub_id_1["English"]["dia_kanteisho"] = "Dia Kanteisho";
	$fieldToolTipsvoice_sub_id_1["English"]["dia_kanteisho"] = "";
	$placeHoldersvoice_sub_id_1["English"]["dia_kanteisho"] = "";
	$fieldLabelsvoice_sub_id_1["English"]["dia_okyakusama_shousai"] = "Dia Okyakusama Shousai";
	$fieldToolTipsvoice_sub_id_1["English"]["dia_okyakusama_shousai"] = "";
	$placeHoldersvoice_sub_id_1["English"]["dia_okyakusama_shousai"] = "";
	$fieldLabelsvoice_sub_id_1["English"]["dia_otorihiki_keiai"] = "Dia Otorihiki Keiai";
	$fieldToolTipsvoice_sub_id_1["English"]["dia_otorihiki_keiai"] = "";
	$placeHoldersvoice_sub_id_1["English"]["dia_otorihiki_keiai"] = "";
	$fieldLabelsvoice_sub_id_1["English"]["dia_souhyou"] = "Dia Souhyou";
	$fieldToolTipsvoice_sub_id_1["English"]["dia_souhyou"] = "";
	$placeHoldersvoice_sub_id_1["English"]["dia_souhyou"] = "";
	$fieldLabelsvoice_sub_id_1["English"]["category_1"] = "Category 1";
	$fieldToolTipsvoice_sub_id_1["English"]["category_1"] = "";
	$placeHoldersvoice_sub_id_1["English"]["category_1"] = "";
	$fieldLabelsvoice_sub_id_1["English"]["category_2"] = "Category 2";
	$fieldToolTipsvoice_sub_id_1["English"]["category_2"] = "";
	$placeHoldersvoice_sub_id_1["English"]["category_2"] = "";
	$fieldLabelsvoice_sub_id_1["English"]["category_21"] = "Category 21";
	$fieldToolTipsvoice_sub_id_1["English"]["category_21"] = "";
	$placeHoldersvoice_sub_id_1["English"]["category_21"] = "";
	$fieldLabelsvoice_sub_id_1["English"]["category_22"] = "Category 22";
	$fieldToolTipsvoice_sub_id_1["English"]["category_22"] = "";
	$placeHoldersvoice_sub_id_1["English"]["category_22"] = "";
	$fieldLabelsvoice_sub_id_1["English"]["category_31"] = "Category 31";
	$fieldToolTipsvoice_sub_id_1["English"]["category_31"] = "";
	$placeHoldersvoice_sub_id_1["English"]["category_31"] = "";
	$fieldLabelsvoice_sub_id_1["English"]["category_32"] = "Category 32";
	$fieldToolTipsvoice_sub_id_1["English"]["category_32"] = "";
	$placeHoldersvoice_sub_id_1["English"]["category_32"] = "";
	$fieldLabelsvoice_sub_id_1["English"]["img_pass"] = "Img Pass";
	$fieldToolTipsvoice_sub_id_1["English"]["img_pass"] = "";
	$placeHoldersvoice_sub_id_1["English"]["img_pass"] = "";
	$fieldLabelsvoice_sub_id_1["English"]["href_pass"] = "Href Pass";
	$fieldToolTipsvoice_sub_id_1["English"]["href_pass"] = "";
	$placeHoldersvoice_sub_id_1["English"]["href_pass"] = "";
	$fieldLabelsvoice_sub_id_1["English"]["voice_date"] = "Voice Date";
	$fieldToolTipsvoice_sub_id_1["English"]["voice_date"] = "";
	$placeHoldersvoice_sub_id_1["English"]["voice_date"] = "";
	if (count($fieldToolTipsvoice_sub_id_1["English"]))
		$tdatavoice_sub_id_1[".isUseToolTips"] = true;
}


	$tdatavoice_sub_id_1[".NCSearch"] = true;



$tdatavoice_sub_id_1[".shortTableName"] = "voice_sub_id_1";
$tdatavoice_sub_id_1[".nSecOptions"] = 0;
$tdatavoice_sub_id_1[".recsPerRowPrint"] = 1;
$tdatavoice_sub_id_1[".mainTableOwnerID"] = "";
$tdatavoice_sub_id_1[".moveNext"] = 1;
$tdatavoice_sub_id_1[".entityType"] = 1;

$tdatavoice_sub_id_1[".strOriginalTableName"] = "voice_sub";

	



$tdatavoice_sub_id_1[".showAddInPopup"] = false;

$tdatavoice_sub_id_1[".showEditInPopup"] = false;

$tdatavoice_sub_id_1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavoice_sub_id_1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavoice_sub_id_1[".fieldsForRegister"] = array();

$tdatavoice_sub_id_1[".listAjax"] = false;

	$tdatavoice_sub_id_1[".audit"] = true;

	$tdatavoice_sub_id_1[".locking"] = false;



$tdatavoice_sub_id_1[".list"] = true;

$tdatavoice_sub_id_1[".inlineEdit"] = true;


$tdatavoice_sub_id_1[".reorderRecordsByHeader"] = true;



$tdatavoice_sub_id_1[".inlineAdd"] = true;

$tdatavoice_sub_id_1[".import"] = true;

$tdatavoice_sub_id_1[".exportTo"] = true;


$tdatavoice_sub_id_1[".delete"] = true;

$tdatavoice_sub_id_1[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatavoice_sub_id_1[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatavoice_sub_id_1[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatavoice_sub_id_1[".searchSaving"] = false;
//

$tdatavoice_sub_id_1[".showSearchPanel"] = true;
		$tdatavoice_sub_id_1[".flexibleSearch"] = true;

$tdatavoice_sub_id_1[".isUseAjaxSuggest"] = true;

$tdatavoice_sub_id_1[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatavoice_sub_id_1[".ajaxCodeSnippetAdded"] = false;

$tdatavoice_sub_id_1[".buttonsAdded"] = false;

$tdatavoice_sub_id_1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavoice_sub_id_1[".isUseTimeForSearch"] = false;





$tdatavoice_sub_id_1[".allSearchFields"] = array();
$tdatavoice_sub_id_1[".filterFields"] = array();
$tdatavoice_sub_id_1[".requiredSearchFields"] = array();

$tdatavoice_sub_id_1[".allSearchFields"][] = "id";
	$tdatavoice_sub_id_1[".allSearchFields"][] = "voice_id";
	$tdatavoice_sub_id_1[".allSearchFields"][] = "subject";
	$tdatavoice_sub_id_1[".allSearchFields"][] = "page_category";
	$tdatavoice_sub_id_1[".allSearchFields"][] = "preview_dia_tegami";
	$tdatavoice_sub_id_1[".allSearchFields"][] = "preveiw_kin_tegami";
	

$tdatavoice_sub_id_1[".googleLikeFields"] = array();
$tdatavoice_sub_id_1[".googleLikeFields"][] = "id";
$tdatavoice_sub_id_1[".googleLikeFields"][] = "voice_id";
$tdatavoice_sub_id_1[".googleLikeFields"][] = "subject";
$tdatavoice_sub_id_1[".googleLikeFields"][] = "link";
$tdatavoice_sub_id_1[".googleLikeFields"][] = "date";
$tdatavoice_sub_id_1[".googleLikeFields"][] = "zip_name";
$tdatavoice_sub_id_1[".googleLikeFields"][] = "goods_name";
$tdatavoice_sub_id_1[".googleLikeFields"][] = "cal_price";
$tdatavoice_sub_id_1[".googleLikeFields"][] = "goods_category";
$tdatavoice_sub_id_1[".googleLikeFields"][] = "brand";
$tdatavoice_sub_id_1[".googleLikeFields"][] = "brand_category";
$tdatavoice_sub_id_1[".googleLikeFields"][] = "hinmoku";
$tdatavoice_sub_id_1[".googleLikeFields"][] = "page_category";
$tdatavoice_sub_id_1[".googleLikeFields"][] = "page_num";
$tdatavoice_sub_id_1[".googleLikeFields"][] = "page_master";
$tdatavoice_sub_id_1[".googleLikeFields"][] = "page_regist";
$tdatavoice_sub_id_1[".googleLikeFields"][] = "detail";
$tdatavoice_sub_id_1[".googleLikeFields"][] = "seq";
$tdatavoice_sub_id_1[".googleLikeFields"][] = "preview_dia";
$tdatavoice_sub_id_1[".googleLikeFields"][] = "preview_kin";
$tdatavoice_sub_id_1[".googleLikeFields"][] = "preview_brand";
$tdatavoice_sub_id_1[".googleLikeFields"][] = "preview_dia_tegami";
$tdatavoice_sub_id_1[".googleLikeFields"][] = "preveiw_kin_tegami";
$tdatavoice_sub_id_1[".googleLikeFields"][] = "preview_kin_brand";
$tdatavoice_sub_id_1[".googleLikeFields"][] = "dia_jisseki_id";
$tdatavoice_sub_id_1[".googleLikeFields"][] = "did_grade";
$tdatavoice_sub_id_1[".googleLikeFields"][] = "dia_kanteisho";
$tdatavoice_sub_id_1[".googleLikeFields"][] = "dia_okyakusama_shousai";
$tdatavoice_sub_id_1[".googleLikeFields"][] = "dia_otorihiki_keiai";
$tdatavoice_sub_id_1[".googleLikeFields"][] = "dia_souhyou";
$tdatavoice_sub_id_1[".googleLikeFields"][] = "category_1";
$tdatavoice_sub_id_1[".googleLikeFields"][] = "category_2";
$tdatavoice_sub_id_1[".googleLikeFields"][] = "category_21";
$tdatavoice_sub_id_1[".googleLikeFields"][] = "category_22";
$tdatavoice_sub_id_1[".googleLikeFields"][] = "category_31";
$tdatavoice_sub_id_1[".googleLikeFields"][] = "category_32";
$tdatavoice_sub_id_1[".googleLikeFields"][] = "img_pass";
$tdatavoice_sub_id_1[".googleLikeFields"][] = "href_pass";
$tdatavoice_sub_id_1[".googleLikeFields"][] = "voice_date";


$tdatavoice_sub_id_1[".advSearchFields"] = array();
$tdatavoice_sub_id_1[".advSearchFields"][] = "id";
$tdatavoice_sub_id_1[".advSearchFields"][] = "voice_id";
$tdatavoice_sub_id_1[".advSearchFields"][] = "subject";
$tdatavoice_sub_id_1[".advSearchFields"][] = "page_category";
$tdatavoice_sub_id_1[".advSearchFields"][] = "preview_dia_tegami";
$tdatavoice_sub_id_1[".advSearchFields"][] = "preveiw_kin_tegami";

$tdatavoice_sub_id_1[".tableType"] = "list";

$tdatavoice_sub_id_1[".printerPageOrientation"] = 0;
$tdatavoice_sub_id_1[".nPrinterPageScale"] = 100;

$tdatavoice_sub_id_1[".nPrinterSplitRecords"] = 40;

$tdatavoice_sub_id_1[".nPrinterPDFSplitRecords"] = 40;



$tdatavoice_sub_id_1[".geocodingEnabled"] = false;





$tdatavoice_sub_id_1[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatavoice_sub_id_1[".pageSize"] = 20;

$tdatavoice_sub_id_1[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavoice_sub_id_1[".strOrderBy"] = $tstrOrderBy;

$tdatavoice_sub_id_1[".orderindexes"] = array();
$tdatavoice_sub_id_1[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdatavoice_sub_id_1[".sqlHead"] = "SELECT `id`,  `voice_id`,  `subject`,  `link`,  `date`,  `zip_name`,  `goods_name`,  `cal_price`,  `goods_category`,  `brand`,  `brand_category`,  `hinmoku`,  `page_category`,  `page_num`,  `page_master`,  `page_regist`,  `detail`,  `seq`,  `preview_dia`,  `preview_kin`,  `preview_brand`,  `preview_dia_tegami`,  `preveiw_kin_tegami`,  `preview_kin_brand`,  `dia_jisseki_id`,  `did_grade`,  `dia_kanteisho`,  `dia_okyakusama_shousai`,  `dia_otorihiki_keiai`,  `dia_souhyou`,  `category_1`,  `category_2`,  `category_21`,  `category_22`,  `category_31`,  `category_32`,  `img_pass`,  `href_pass`,  `voice_date`";
$tdatavoice_sub_id_1[".sqlFrom"] = "FROM `voice_sub`";
$tdatavoice_sub_id_1[".sqlWhereExpr"] = "(`voice_id` =1)";
$tdatavoice_sub_id_1[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavoice_sub_id_1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavoice_sub_id_1[".arrGroupsPerPage"] = $arrGPP;

$tdatavoice_sub_id_1[".highlightSearchResults"] = true;

$tableKeysvoice_sub_id_1 = array();
$tableKeysvoice_sub_id_1[] = "id";
$tdatavoice_sub_id_1[".Keys"] = $tableKeysvoice_sub_id_1;

$tdatavoice_sub_id_1[".listFields"] = array();
$tdatavoice_sub_id_1[".listFields"][] = "id";
$tdatavoice_sub_id_1[".listFields"][] = "voice_id";
$tdatavoice_sub_id_1[".listFields"][] = "subject";
$tdatavoice_sub_id_1[".listFields"][] = "page_category";
$tdatavoice_sub_id_1[".listFields"][] = "preview_dia_tegami";
$tdatavoice_sub_id_1[".listFields"][] = "preveiw_kin_tegami";

$tdatavoice_sub_id_1[".hideMobileList"] = array();


$tdatavoice_sub_id_1[".viewFields"] = array();

$tdatavoice_sub_id_1[".addFields"] = array();

$tdatavoice_sub_id_1[".masterListFields"] = array();
$tdatavoice_sub_id_1[".masterListFields"][] = "id";
$tdatavoice_sub_id_1[".masterListFields"][] = "voice_id";
$tdatavoice_sub_id_1[".masterListFields"][] = "subject";
$tdatavoice_sub_id_1[".masterListFields"][] = "link";
$tdatavoice_sub_id_1[".masterListFields"][] = "date";
$tdatavoice_sub_id_1[".masterListFields"][] = "zip_name";
$tdatavoice_sub_id_1[".masterListFields"][] = "goods_name";
$tdatavoice_sub_id_1[".masterListFields"][] = "cal_price";
$tdatavoice_sub_id_1[".masterListFields"][] = "goods_category";
$tdatavoice_sub_id_1[".masterListFields"][] = "brand";
$tdatavoice_sub_id_1[".masterListFields"][] = "brand_category";
$tdatavoice_sub_id_1[".masterListFields"][] = "hinmoku";
$tdatavoice_sub_id_1[".masterListFields"][] = "page_category";
$tdatavoice_sub_id_1[".masterListFields"][] = "page_num";
$tdatavoice_sub_id_1[".masterListFields"][] = "page_master";
$tdatavoice_sub_id_1[".masterListFields"][] = "page_regist";
$tdatavoice_sub_id_1[".masterListFields"][] = "detail";
$tdatavoice_sub_id_1[".masterListFields"][] = "seq";
$tdatavoice_sub_id_1[".masterListFields"][] = "preview_dia";
$tdatavoice_sub_id_1[".masterListFields"][] = "preview_kin";
$tdatavoice_sub_id_1[".masterListFields"][] = "preview_brand";
$tdatavoice_sub_id_1[".masterListFields"][] = "preview_dia_tegami";
$tdatavoice_sub_id_1[".masterListFields"][] = "preveiw_kin_tegami";
$tdatavoice_sub_id_1[".masterListFields"][] = "preview_kin_brand";
$tdatavoice_sub_id_1[".masterListFields"][] = "dia_jisseki_id";
$tdatavoice_sub_id_1[".masterListFields"][] = "did_grade";
$tdatavoice_sub_id_1[".masterListFields"][] = "dia_kanteisho";
$tdatavoice_sub_id_1[".masterListFields"][] = "dia_okyakusama_shousai";
$tdatavoice_sub_id_1[".masterListFields"][] = "dia_otorihiki_keiai";
$tdatavoice_sub_id_1[".masterListFields"][] = "dia_souhyou";
$tdatavoice_sub_id_1[".masterListFields"][] = "category_1";
$tdatavoice_sub_id_1[".masterListFields"][] = "category_2";
$tdatavoice_sub_id_1[".masterListFields"][] = "category_21";
$tdatavoice_sub_id_1[".masterListFields"][] = "category_22";
$tdatavoice_sub_id_1[".masterListFields"][] = "category_31";
$tdatavoice_sub_id_1[".masterListFields"][] = "category_32";
$tdatavoice_sub_id_1[".masterListFields"][] = "img_pass";
$tdatavoice_sub_id_1[".masterListFields"][] = "href_pass";
$tdatavoice_sub_id_1[".masterListFields"][] = "voice_date";

$tdatavoice_sub_id_1[".inlineAddFields"] = array();
$tdatavoice_sub_id_1[".inlineAddFields"][] = "voice_id";
$tdatavoice_sub_id_1[".inlineAddFields"][] = "subject";
$tdatavoice_sub_id_1[".inlineAddFields"][] = "page_category";
$tdatavoice_sub_id_1[".inlineAddFields"][] = "preview_dia_tegami";
$tdatavoice_sub_id_1[".inlineAddFields"][] = "preveiw_kin_tegami";

$tdatavoice_sub_id_1[".editFields"] = array();

$tdatavoice_sub_id_1[".inlineEditFields"] = array();
$tdatavoice_sub_id_1[".inlineEditFields"][] = "voice_id";
$tdatavoice_sub_id_1[".inlineEditFields"][] = "subject";
$tdatavoice_sub_id_1[".inlineEditFields"][] = "page_category";
$tdatavoice_sub_id_1[".inlineEditFields"][] = "preview_dia_tegami";
$tdatavoice_sub_id_1[".inlineEditFields"][] = "preveiw_kin_tegami";

$tdatavoice_sub_id_1[".updateSelectedFields"] = array();


$tdatavoice_sub_id_1[".exportFields"] = array();
$tdatavoice_sub_id_1[".exportFields"][] = "id";
$tdatavoice_sub_id_1[".exportFields"][] = "voice_id";
$tdatavoice_sub_id_1[".exportFields"][] = "subject";
$tdatavoice_sub_id_1[".exportFields"][] = "page_category";
$tdatavoice_sub_id_1[".exportFields"][] = "preview_dia_tegami";
$tdatavoice_sub_id_1[".exportFields"][] = "preveiw_kin_tegami";

$tdatavoice_sub_id_1[".importFields"] = array();
$tdatavoice_sub_id_1[".importFields"][] = "id";
$tdatavoice_sub_id_1[".importFields"][] = "voice_id";
$tdatavoice_sub_id_1[".importFields"][] = "subject";
$tdatavoice_sub_id_1[".importFields"][] = "page_category";
$tdatavoice_sub_id_1[".importFields"][] = "preview_dia_tegami";
$tdatavoice_sub_id_1[".importFields"][] = "preveiw_kin_tegami";

$tdatavoice_sub_id_1[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "voice_sub";
	$fdata["Label"] = GetFieldLabel("voice_sub_id_1","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`id`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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




	$tdatavoice_sub_id_1["id"] = $fdata;
//	voice_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "voice_id";
	$fdata["GoodName"] = "voice_id";
	$fdata["ownerTable"] = "voice_sub";
	$fdata["Label"] = GetFieldLabel("voice_sub_id_1","voice_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "voice_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`voice_id`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatavoice_sub_id_1["voice_id"] = $fdata;
//	subject
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "subject";
	$fdata["GoodName"] = "subject";
	$fdata["ownerTable"] = "voice_sub";
	$fdata["Label"] = GetFieldLabel("voice_sub_id_1","subject");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "subject";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`subject`";

	
	
				$fdata["FieldPermissions"] = true;

		$fdata["UploadCodeExpression"] = true;

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
				$vdata["ShowThumbnail"] = true;
			$vdata["ShowFileSize"] = true;
			$vdata["ShowIcon"] = true;
		
	
	
	
	
	
	
	
	
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

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 150;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatavoice_sub_id_1["subject"] = $fdata;
//	link
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "link";
	$fdata["GoodName"] = "link";
	$fdata["ownerTable"] = "voice_sub";
	$fdata["Label"] = GetFieldLabel("voice_sub_id_1","link");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "link";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`link`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatavoice_sub_id_1["link"] = $fdata;
//	date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "date";
	$fdata["GoodName"] = "date";
	$fdata["ownerTable"] = "voice_sub";
	$fdata["Label"] = GetFieldLabel("voice_sub_id_1","date");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`date`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatavoice_sub_id_1["date"] = $fdata;
//	zip_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "zip_name";
	$fdata["GoodName"] = "zip_name";
	$fdata["ownerTable"] = "voice_sub";
	$fdata["Label"] = GetFieldLabel("voice_sub_id_1","zip_name");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "zip_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`zip_name`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatavoice_sub_id_1["zip_name"] = $fdata;
//	goods_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "goods_name";
	$fdata["GoodName"] = "goods_name";
	$fdata["ownerTable"] = "voice_sub";
	$fdata["Label"] = GetFieldLabel("voice_sub_id_1","goods_name");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "goods_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`goods_name`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatavoice_sub_id_1["goods_name"] = $fdata;
//	cal_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "cal_price";
	$fdata["GoodName"] = "cal_price";
	$fdata["ownerTable"] = "voice_sub";
	$fdata["Label"] = GetFieldLabel("voice_sub_id_1","cal_price");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "cal_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`cal_price`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatavoice_sub_id_1["cal_price"] = $fdata;
//	goods_category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "goods_category";
	$fdata["GoodName"] = "goods_category";
	$fdata["ownerTable"] = "voice_sub";
	$fdata["Label"] = GetFieldLabel("voice_sub_id_1","goods_category");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "goods_category";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`goods_category`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatavoice_sub_id_1["goods_category"] = $fdata;
//	brand
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "brand";
	$fdata["GoodName"] = "brand";
	$fdata["ownerTable"] = "voice_sub";
	$fdata["Label"] = GetFieldLabel("voice_sub_id_1","brand");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "brand";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`brand`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatavoice_sub_id_1["brand"] = $fdata;
//	brand_category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "brand_category";
	$fdata["GoodName"] = "brand_category";
	$fdata["ownerTable"] = "voice_sub";
	$fdata["Label"] = GetFieldLabel("voice_sub_id_1","brand_category");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "brand_category";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`brand_category`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatavoice_sub_id_1["brand_category"] = $fdata;
//	hinmoku
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "hinmoku";
	$fdata["GoodName"] = "hinmoku";
	$fdata["ownerTable"] = "voice_sub";
	$fdata["Label"] = GetFieldLabel("voice_sub_id_1","hinmoku");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "hinmoku";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`hinmoku`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatavoice_sub_id_1["hinmoku"] = $fdata;
//	page_category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "page_category";
	$fdata["GoodName"] = "page_category";
	$fdata["ownerTable"] = "voice_sub";
	$fdata["Label"] = GetFieldLabel("voice_sub_id_1","page_category");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "page_category";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`page_category`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatavoice_sub_id_1["page_category"] = $fdata;
//	page_num
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "page_num";
	$fdata["GoodName"] = "page_num";
	$fdata["ownerTable"] = "voice_sub";
	$fdata["Label"] = GetFieldLabel("voice_sub_id_1","page_num");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "page_num";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`page_num`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=32";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatavoice_sub_id_1["page_num"] = $fdata;
//	page_master
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "page_master";
	$fdata["GoodName"] = "page_master";
	$fdata["ownerTable"] = "voice_sub";
	$fdata["Label"] = GetFieldLabel("voice_sub_id_1","page_master");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "page_master";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`page_master`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=32";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatavoice_sub_id_1["page_master"] = $fdata;
//	page_regist
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "page_regist";
	$fdata["GoodName"] = "page_regist";
	$fdata["ownerTable"] = "voice_sub";
	$fdata["Label"] = GetFieldLabel("voice_sub_id_1","page_regist");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "page_regist";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`page_regist`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatavoice_sub_id_1["page_regist"] = $fdata;
//	detail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "detail";
	$fdata["GoodName"] = "detail";
	$fdata["ownerTable"] = "voice_sub";
	$fdata["Label"] = GetFieldLabel("voice_sub_id_1","detail");
	$fdata["FieldType"] = 201;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "detail";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`detail`";

	
	
			
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








	$tdatavoice_sub_id_1["detail"] = $fdata;
//	seq
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "seq";
	$fdata["GoodName"] = "seq";
	$fdata["ownerTable"] = "voice_sub";
	$fdata["Label"] = GetFieldLabel("voice_sub_id_1","seq");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "seq";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`seq`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatavoice_sub_id_1["seq"] = $fdata;
//	preview_dia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "preview_dia";
	$fdata["GoodName"] = "preview_dia";
	$fdata["ownerTable"] = "voice_sub";
	$fdata["Label"] = GetFieldLabel("voice_sub_id_1","preview_dia");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "preview_dia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`preview_dia`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatavoice_sub_id_1["preview_dia"] = $fdata;
//	preview_kin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "preview_kin";
	$fdata["GoodName"] = "preview_kin";
	$fdata["ownerTable"] = "voice_sub";
	$fdata["Label"] = GetFieldLabel("voice_sub_id_1","preview_kin");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "preview_kin";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`preview_kin`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatavoice_sub_id_1["preview_kin"] = $fdata;
//	preview_brand
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "preview_brand";
	$fdata["GoodName"] = "preview_brand";
	$fdata["ownerTable"] = "voice_sub";
	$fdata["Label"] = GetFieldLabel("voice_sub_id_1","preview_brand");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "preview_brand";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`preview_brand`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatavoice_sub_id_1["preview_brand"] = $fdata;
//	preview_dia_tegami
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "preview_dia_tegami";
	$fdata["GoodName"] = "preview_dia_tegami";
	$fdata["ownerTable"] = "voice_sub";
	$fdata["Label"] = GetFieldLabel("voice_sub_id_1","preview_dia_tegami");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "preview_dia_tegami";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`preview_dia_tegami`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatavoice_sub_id_1["preview_dia_tegami"] = $fdata;
//	preveiw_kin_tegami
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "preveiw_kin_tegami";
	$fdata["GoodName"] = "preveiw_kin_tegami";
	$fdata["ownerTable"] = "voice_sub";
	$fdata["Label"] = GetFieldLabel("voice_sub_id_1","preveiw_kin_tegami");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "preveiw_kin_tegami";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`preveiw_kin_tegami`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatavoice_sub_id_1["preveiw_kin_tegami"] = $fdata;
//	preview_kin_brand
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "preview_kin_brand";
	$fdata["GoodName"] = "preview_kin_brand";
	$fdata["ownerTable"] = "voice_sub";
	$fdata["Label"] = GetFieldLabel("voice_sub_id_1","preview_kin_brand");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "preview_kin_brand";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`preview_kin_brand`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatavoice_sub_id_1["preview_kin_brand"] = $fdata;
//	dia_jisseki_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "dia_jisseki_id";
	$fdata["GoodName"] = "dia_jisseki_id";
	$fdata["ownerTable"] = "voice_sub";
	$fdata["Label"] = GetFieldLabel("voice_sub_id_1","dia_jisseki_id");
	$fdata["FieldType"] = 201;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "dia_jisseki_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`dia_jisseki_id`";

	
	
			
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








	$tdatavoice_sub_id_1["dia_jisseki_id"] = $fdata;
//	did_grade
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "did_grade";
	$fdata["GoodName"] = "did_grade";
	$fdata["ownerTable"] = "voice_sub";
	$fdata["Label"] = GetFieldLabel("voice_sub_id_1","did_grade");
	$fdata["FieldType"] = 201;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "did_grade";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`did_grade`";

	
	
			
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








	$tdatavoice_sub_id_1["did_grade"] = $fdata;
//	dia_kanteisho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "dia_kanteisho";
	$fdata["GoodName"] = "dia_kanteisho";
	$fdata["ownerTable"] = "voice_sub";
	$fdata["Label"] = GetFieldLabel("voice_sub_id_1","dia_kanteisho");
	$fdata["FieldType"] = 201;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "dia_kanteisho";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`dia_kanteisho`";

	
	
			
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








	$tdatavoice_sub_id_1["dia_kanteisho"] = $fdata;
//	dia_okyakusama_shousai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "dia_okyakusama_shousai";
	$fdata["GoodName"] = "dia_okyakusama_shousai";
	$fdata["ownerTable"] = "voice_sub";
	$fdata["Label"] = GetFieldLabel("voice_sub_id_1","dia_okyakusama_shousai");
	$fdata["FieldType"] = 201;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "dia_okyakusama_shousai";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`dia_okyakusama_shousai`";

	
	
			
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








	$tdatavoice_sub_id_1["dia_okyakusama_shousai"] = $fdata;
//	dia_otorihiki_keiai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "dia_otorihiki_keiai";
	$fdata["GoodName"] = "dia_otorihiki_keiai";
	$fdata["ownerTable"] = "voice_sub";
	$fdata["Label"] = GetFieldLabel("voice_sub_id_1","dia_otorihiki_keiai");
	$fdata["FieldType"] = 201;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "dia_otorihiki_keiai";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`dia_otorihiki_keiai`";

	
	
			
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








	$tdatavoice_sub_id_1["dia_otorihiki_keiai"] = $fdata;
//	dia_souhyou
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "dia_souhyou";
	$fdata["GoodName"] = "dia_souhyou";
	$fdata["ownerTable"] = "voice_sub";
	$fdata["Label"] = GetFieldLabel("voice_sub_id_1","dia_souhyou");
	$fdata["FieldType"] = 201;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "dia_souhyou";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`dia_souhyou`";

	
	
			
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








	$tdatavoice_sub_id_1["dia_souhyou"] = $fdata;
//	category_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "category_1";
	$fdata["GoodName"] = "category_1";
	$fdata["ownerTable"] = "voice_sub";
	$fdata["Label"] = GetFieldLabel("voice_sub_id_1","category_1");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "category_1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`category_1`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatavoice_sub_id_1["category_1"] = $fdata;
//	category_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "category_2";
	$fdata["GoodName"] = "category_2";
	$fdata["ownerTable"] = "voice_sub";
	$fdata["Label"] = GetFieldLabel("voice_sub_id_1","category_2");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "category_2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`category_2`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatavoice_sub_id_1["category_2"] = $fdata;
//	category_21
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "category_21";
	$fdata["GoodName"] = "category_21";
	$fdata["ownerTable"] = "voice_sub";
	$fdata["Label"] = GetFieldLabel("voice_sub_id_1","category_21");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "category_21";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`category_21`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatavoice_sub_id_1["category_21"] = $fdata;
//	category_22
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "category_22";
	$fdata["GoodName"] = "category_22";
	$fdata["ownerTable"] = "voice_sub";
	$fdata["Label"] = GetFieldLabel("voice_sub_id_1","category_22");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "category_22";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`category_22`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatavoice_sub_id_1["category_22"] = $fdata;
//	category_31
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "category_31";
	$fdata["GoodName"] = "category_31";
	$fdata["ownerTable"] = "voice_sub";
	$fdata["Label"] = GetFieldLabel("voice_sub_id_1","category_31");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "category_31";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`category_31`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatavoice_sub_id_1["category_31"] = $fdata;
//	category_32
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "category_32";
	$fdata["GoodName"] = "category_32";
	$fdata["ownerTable"] = "voice_sub";
	$fdata["Label"] = GetFieldLabel("voice_sub_id_1","category_32");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "category_32";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`category_32`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatavoice_sub_id_1["category_32"] = $fdata;
//	img_pass
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "img_pass";
	$fdata["GoodName"] = "img_pass";
	$fdata["ownerTable"] = "voice_sub";
	$fdata["Label"] = GetFieldLabel("voice_sub_id_1","img_pass");
	$fdata["FieldType"] = 201;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "img_pass";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`img_pass`";

	
	
			
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








	$tdatavoice_sub_id_1["img_pass"] = $fdata;
//	href_pass
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "href_pass";
	$fdata["GoodName"] = "href_pass";
	$fdata["ownerTable"] = "voice_sub";
	$fdata["Label"] = GetFieldLabel("voice_sub_id_1","href_pass");
	$fdata["FieldType"] = 201;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "href_pass";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`href_pass`";

	
	
			
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








	$tdatavoice_sub_id_1["href_pass"] = $fdata;
//	voice_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "voice_date";
	$fdata["GoodName"] = "voice_date";
	$fdata["ownerTable"] = "voice_sub";
	$fdata["Label"] = GetFieldLabel("voice_sub_id_1","voice_date");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "voice_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`voice_date`";

	
	
			
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








	$tdatavoice_sub_id_1["voice_date"] = $fdata;


$tables_data["voice_sub_id_1"]=&$tdatavoice_sub_id_1;
$field_labels["voice_sub_id_1"] = &$fieldLabelsvoice_sub_id_1;
$fieldToolTips["voice_sub_id_1"] = &$fieldToolTipsvoice_sub_id_1;
$placeHolders["voice_sub_id_1"] = &$placeHoldersvoice_sub_id_1;
$page_titles["voice_sub_id_1"] = &$pageTitlesvoice_sub_id_1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["voice_sub_id_1"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["voice_sub_id_1"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_voice_sub_id_1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `voice_id`,  `subject`,  `link`,  `date`,  `zip_name`,  `goods_name`,  `cal_price`,  `goods_category`,  `brand`,  `brand_category`,  `hinmoku`,  `page_category`,  `page_num`,  `page_master`,  `page_regist`,  `detail`,  `seq`,  `preview_dia`,  `preview_kin`,  `preview_brand`,  `preview_dia_tegami`,  `preveiw_kin_tegami`,  `preview_kin_brand`,  `dia_jisseki_id`,  `did_grade`,  `dia_kanteisho`,  `dia_okyakusama_shousai`,  `dia_otorihiki_keiai`,  `dia_souhyou`,  `category_1`,  `category_2`,  `category_21`,  `category_22`,  `category_31`,  `category_32`,  `img_pass`,  `href_pass`,  `voice_date`";
$proto0["m_strFrom"] = "FROM `voice_sub`";
$proto0["m_strWhere"] = "(`voice_id` =1)";
$proto0["m_strOrderBy"] = "ORDER BY `id` DESC";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "`voice_id` =1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "voice_id",
	"m_strTable" => "voice_sub",
	"m_srcTableName" => "voice_sub_id_1"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=1";
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
	"m_strTable" => "voice_sub",
	"m_srcTableName" => "voice_sub_id_1"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "voice_sub_id_1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "voice_id",
	"m_strTable" => "voice_sub",
	"m_srcTableName" => "voice_sub_id_1"
));

$proto8["m_sql"] = "`voice_id`";
$proto8["m_srcTableName"] = "voice_sub_id_1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "subject",
	"m_strTable" => "voice_sub",
	"m_srcTableName" => "voice_sub_id_1"
));

$proto10["m_sql"] = "`subject`";
$proto10["m_srcTableName"] = "voice_sub_id_1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "link",
	"m_strTable" => "voice_sub",
	"m_srcTableName" => "voice_sub_id_1"
));

$proto12["m_sql"] = "`link`";
$proto12["m_srcTableName"] = "voice_sub_id_1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "date",
	"m_strTable" => "voice_sub",
	"m_srcTableName" => "voice_sub_id_1"
));

$proto14["m_sql"] = "`date`";
$proto14["m_srcTableName"] = "voice_sub_id_1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "zip_name",
	"m_strTable" => "voice_sub",
	"m_srcTableName" => "voice_sub_id_1"
));

$proto16["m_sql"] = "`zip_name`";
$proto16["m_srcTableName"] = "voice_sub_id_1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "goods_name",
	"m_strTable" => "voice_sub",
	"m_srcTableName" => "voice_sub_id_1"
));

$proto18["m_sql"] = "`goods_name`";
$proto18["m_srcTableName"] = "voice_sub_id_1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "cal_price",
	"m_strTable" => "voice_sub",
	"m_srcTableName" => "voice_sub_id_1"
));

$proto20["m_sql"] = "`cal_price`";
$proto20["m_srcTableName"] = "voice_sub_id_1";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "goods_category",
	"m_strTable" => "voice_sub",
	"m_srcTableName" => "voice_sub_id_1"
));

$proto22["m_sql"] = "`goods_category`";
$proto22["m_srcTableName"] = "voice_sub_id_1";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "brand",
	"m_strTable" => "voice_sub",
	"m_srcTableName" => "voice_sub_id_1"
));

$proto24["m_sql"] = "`brand`";
$proto24["m_srcTableName"] = "voice_sub_id_1";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "brand_category",
	"m_strTable" => "voice_sub",
	"m_srcTableName" => "voice_sub_id_1"
));

$proto26["m_sql"] = "`brand_category`";
$proto26["m_srcTableName"] = "voice_sub_id_1";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "hinmoku",
	"m_strTable" => "voice_sub",
	"m_srcTableName" => "voice_sub_id_1"
));

$proto28["m_sql"] = "`hinmoku`";
$proto28["m_srcTableName"] = "voice_sub_id_1";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "page_category",
	"m_strTable" => "voice_sub",
	"m_srcTableName" => "voice_sub_id_1"
));

$proto30["m_sql"] = "`page_category`";
$proto30["m_srcTableName"] = "voice_sub_id_1";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "page_num",
	"m_strTable" => "voice_sub",
	"m_srcTableName" => "voice_sub_id_1"
));

$proto32["m_sql"] = "`page_num`";
$proto32["m_srcTableName"] = "voice_sub_id_1";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "page_master",
	"m_strTable" => "voice_sub",
	"m_srcTableName" => "voice_sub_id_1"
));

$proto34["m_sql"] = "`page_master`";
$proto34["m_srcTableName"] = "voice_sub_id_1";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "page_regist",
	"m_strTable" => "voice_sub",
	"m_srcTableName" => "voice_sub_id_1"
));

$proto36["m_sql"] = "`page_regist`";
$proto36["m_srcTableName"] = "voice_sub_id_1";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "detail",
	"m_strTable" => "voice_sub",
	"m_srcTableName" => "voice_sub_id_1"
));

$proto38["m_sql"] = "`detail`";
$proto38["m_srcTableName"] = "voice_sub_id_1";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "seq",
	"m_strTable" => "voice_sub",
	"m_srcTableName" => "voice_sub_id_1"
));

$proto40["m_sql"] = "`seq`";
$proto40["m_srcTableName"] = "voice_sub_id_1";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "preview_dia",
	"m_strTable" => "voice_sub",
	"m_srcTableName" => "voice_sub_id_1"
));

$proto42["m_sql"] = "`preview_dia`";
$proto42["m_srcTableName"] = "voice_sub_id_1";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "preview_kin",
	"m_strTable" => "voice_sub",
	"m_srcTableName" => "voice_sub_id_1"
));

$proto44["m_sql"] = "`preview_kin`";
$proto44["m_srcTableName"] = "voice_sub_id_1";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "preview_brand",
	"m_strTable" => "voice_sub",
	"m_srcTableName" => "voice_sub_id_1"
));

$proto46["m_sql"] = "`preview_brand`";
$proto46["m_srcTableName"] = "voice_sub_id_1";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "preview_dia_tegami",
	"m_strTable" => "voice_sub",
	"m_srcTableName" => "voice_sub_id_1"
));

$proto48["m_sql"] = "`preview_dia_tegami`";
$proto48["m_srcTableName"] = "voice_sub_id_1";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "preveiw_kin_tegami",
	"m_strTable" => "voice_sub",
	"m_srcTableName" => "voice_sub_id_1"
));

$proto50["m_sql"] = "`preveiw_kin_tegami`";
$proto50["m_srcTableName"] = "voice_sub_id_1";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "preview_kin_brand",
	"m_strTable" => "voice_sub",
	"m_srcTableName" => "voice_sub_id_1"
));

$proto52["m_sql"] = "`preview_kin_brand`";
$proto52["m_srcTableName"] = "voice_sub_id_1";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "dia_jisseki_id",
	"m_strTable" => "voice_sub",
	"m_srcTableName" => "voice_sub_id_1"
));

$proto54["m_sql"] = "`dia_jisseki_id`";
$proto54["m_srcTableName"] = "voice_sub_id_1";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "did_grade",
	"m_strTable" => "voice_sub",
	"m_srcTableName" => "voice_sub_id_1"
));

$proto56["m_sql"] = "`did_grade`";
$proto56["m_srcTableName"] = "voice_sub_id_1";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "dia_kanteisho",
	"m_strTable" => "voice_sub",
	"m_srcTableName" => "voice_sub_id_1"
));

$proto58["m_sql"] = "`dia_kanteisho`";
$proto58["m_srcTableName"] = "voice_sub_id_1";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "dia_okyakusama_shousai",
	"m_strTable" => "voice_sub",
	"m_srcTableName" => "voice_sub_id_1"
));

$proto60["m_sql"] = "`dia_okyakusama_shousai`";
$proto60["m_srcTableName"] = "voice_sub_id_1";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "dia_otorihiki_keiai",
	"m_strTable" => "voice_sub",
	"m_srcTableName" => "voice_sub_id_1"
));

$proto62["m_sql"] = "`dia_otorihiki_keiai`";
$proto62["m_srcTableName"] = "voice_sub_id_1";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "dia_souhyou",
	"m_strTable" => "voice_sub",
	"m_srcTableName" => "voice_sub_id_1"
));

$proto64["m_sql"] = "`dia_souhyou`";
$proto64["m_srcTableName"] = "voice_sub_id_1";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "category_1",
	"m_strTable" => "voice_sub",
	"m_srcTableName" => "voice_sub_id_1"
));

$proto66["m_sql"] = "`category_1`";
$proto66["m_srcTableName"] = "voice_sub_id_1";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "category_2",
	"m_strTable" => "voice_sub",
	"m_srcTableName" => "voice_sub_id_1"
));

$proto68["m_sql"] = "`category_2`";
$proto68["m_srcTableName"] = "voice_sub_id_1";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "category_21",
	"m_strTable" => "voice_sub",
	"m_srcTableName" => "voice_sub_id_1"
));

$proto70["m_sql"] = "`category_21`";
$proto70["m_srcTableName"] = "voice_sub_id_1";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "category_22",
	"m_strTable" => "voice_sub",
	"m_srcTableName" => "voice_sub_id_1"
));

$proto72["m_sql"] = "`category_22`";
$proto72["m_srcTableName"] = "voice_sub_id_1";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "category_31",
	"m_strTable" => "voice_sub",
	"m_srcTableName" => "voice_sub_id_1"
));

$proto74["m_sql"] = "`category_31`";
$proto74["m_srcTableName"] = "voice_sub_id_1";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "category_32",
	"m_strTable" => "voice_sub",
	"m_srcTableName" => "voice_sub_id_1"
));

$proto76["m_sql"] = "`category_32`";
$proto76["m_srcTableName"] = "voice_sub_id_1";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "img_pass",
	"m_strTable" => "voice_sub",
	"m_srcTableName" => "voice_sub_id_1"
));

$proto78["m_sql"] = "`img_pass`";
$proto78["m_srcTableName"] = "voice_sub_id_1";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "href_pass",
	"m_strTable" => "voice_sub",
	"m_srcTableName" => "voice_sub_id_1"
));

$proto80["m_sql"] = "`href_pass`";
$proto80["m_srcTableName"] = "voice_sub_id_1";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "voice_date",
	"m_strTable" => "voice_sub",
	"m_srcTableName" => "voice_sub_id_1"
));

$proto82["m_sql"] = "`voice_date`";
$proto82["m_srcTableName"] = "voice_sub_id_1";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto84=array();
$proto84["m_link"] = "SQLL_MAIN";
			$proto85=array();
$proto85["m_strName"] = "voice_sub";
$proto85["m_srcTableName"] = "voice_sub_id_1";
$proto85["m_columns"] = array();
$proto85["m_columns"][] = "id";
$proto85["m_columns"][] = "voice_id";
$proto85["m_columns"][] = "subject";
$proto85["m_columns"][] = "link";
$proto85["m_columns"][] = "date";
$proto85["m_columns"][] = "zip_name";
$proto85["m_columns"][] = "goods_name";
$proto85["m_columns"][] = "cal_price";
$proto85["m_columns"][] = "goods_category";
$proto85["m_columns"][] = "brand";
$proto85["m_columns"][] = "brand_category";
$proto85["m_columns"][] = "hinmoku";
$proto85["m_columns"][] = "page_category";
$proto85["m_columns"][] = "page_num";
$proto85["m_columns"][] = "page_master";
$proto85["m_columns"][] = "page_regist";
$proto85["m_columns"][] = "detail";
$proto85["m_columns"][] = "seq";
$proto85["m_columns"][] = "preview_dia";
$proto85["m_columns"][] = "preview_kin";
$proto85["m_columns"][] = "preview_brand";
$proto85["m_columns"][] = "preview_dia_tegami";
$proto85["m_columns"][] = "preveiw_kin_tegami";
$proto85["m_columns"][] = "preview_kin_brand";
$proto85["m_columns"][] = "dia_jisseki_id";
$proto85["m_columns"][] = "did_grade";
$proto85["m_columns"][] = "dia_kanteisho";
$proto85["m_columns"][] = "dia_okyakusama_shousai";
$proto85["m_columns"][] = "dia_otorihiki_keiai";
$proto85["m_columns"][] = "dia_souhyou";
$proto85["m_columns"][] = "category_1";
$proto85["m_columns"][] = "category_2";
$proto85["m_columns"][] = "category_21";
$proto85["m_columns"][] = "category_22";
$proto85["m_columns"][] = "category_31";
$proto85["m_columns"][] = "category_32";
$proto85["m_columns"][] = "img_pass";
$proto85["m_columns"][] = "href_pass";
$proto85["m_columns"][] = "voice_date";
$obj = new SQLTable($proto85);

$proto84["m_table"] = $obj;
$proto84["m_sql"] = "`voice_sub`";
$proto84["m_alias"] = "";
$proto84["m_srcTableName"] = "voice_sub_id_1";
$proto86=array();
$proto86["m_sql"] = "";
$proto86["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto86["m_column"]=$obj;
$proto86["m_contained"] = array();
$proto86["m_strCase"] = "";
$proto86["m_havingmode"] = false;
$proto86["m_inBrackets"] = false;
$proto86["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto86);

$proto84["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto84);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto88=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "voice_sub",
	"m_srcTableName" => "voice_sub_id_1"
));

$proto88["m_column"]=$obj;
$proto88["m_bAsc"] = 0;
$proto88["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto88);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="voice_sub_id_1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_voice_sub_id_1 = createSqlQuery_voice_sub_id_1();


	
		;

																																							

$tdatavoice_sub_id_1[".sqlquery"] = $queryData_voice_sub_id_1;

$tableEvents["voice_sub_id_1"] = new eventsBase;
$tdatavoice_sub_id_1[".hasEvents"] = false;

?>