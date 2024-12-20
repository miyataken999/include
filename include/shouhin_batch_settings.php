<?php
require_once(getabspath("classes/cipherer.php"));




$tdatashouhin_batch = array();
	$tdatashouhin_batch[".truncateText"] = true;
	$tdatashouhin_batch[".NumberOfChars"] = 80;
	$tdatashouhin_batch[".ShortName"] = "shouhin_batch";
	$tdatashouhin_batch[".OwnerID"] = "";
	$tdatashouhin_batch[".OriginalTable"] = "shouhin_batch";

//	field labels
$fieldLabelsshouhin_batch = array();
$fieldToolTipsshouhin_batch = array();
$pageTitlesshouhin_batch = array();
$placeHoldersshouhin_batch = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsshouhin_batch["Japanese"] = array();
	$fieldToolTipsshouhin_batch["Japanese"] = array();
	$placeHoldersshouhin_batch["Japanese"] = array();
	$pageTitlesshouhin_batch["Japanese"] = array();
	$fieldLabelsshouhin_batch["Japanese"]["id"] = "Id";
	$fieldToolTipsshouhin_batch["Japanese"]["id"] = "";
	$placeHoldersshouhin_batch["Japanese"]["id"] = "";
	$fieldLabelsshouhin_batch["Japanese"]["product_id"] = "SEQ";
	$fieldToolTipsshouhin_batch["Japanese"]["product_id"] = "";
	$placeHoldersshouhin_batch["Japanese"]["product_id"] = "";
	$fieldLabelsshouhin_batch["Japanese"]["yahoo_sinaban"] = "品番";
	$fieldToolTipsshouhin_batch["Japanese"]["yahoo_sinaban"] = "";
	$placeHoldersshouhin_batch["Japanese"]["yahoo_sinaban"] = "";
	$fieldLabelsshouhin_batch["Japanese"]["nyuukin_price"] = "入金額";
	$fieldToolTipsshouhin_batch["Japanese"]["nyuukin_price"] = "";
	$placeHoldersshouhin_batch["Japanese"]["nyuukin_price"] = "";
	$fieldLabelsshouhin_batch["Japanese"]["comment"] = "コメント";
	$fieldToolTipsshouhin_batch["Japanese"]["comment"] = "";
	$placeHoldersshouhin_batch["Japanese"]["comment"] = "";
	$fieldLabelsshouhin_batch["Japanese"]["status"] = "ステータス";
	$fieldToolTipsshouhin_batch["Japanese"]["status"] = "";
	$placeHoldersshouhin_batch["Japanese"]["status"] = "";
	$fieldLabelsshouhin_batch["Japanese"]["satei_by"] = "査定人";
	$fieldToolTipsshouhin_batch["Japanese"]["satei_by"] = "";
	$placeHoldersshouhin_batch["Japanese"]["satei_by"] = "";
	$fieldLabelsshouhin_batch["Japanese"]["yahoo_saisun_sha"] = "採寸者";
	$fieldToolTipsshouhin_batch["Japanese"]["yahoo_saisun_sha"] = "";
	$placeHoldersshouhin_batch["Japanese"]["yahoo_saisun_sha"] = "";
	$fieldLabelsshouhin_batch["Japanese"]["REG_PHOTOGRAPHER"] = "撮影者";
	$fieldToolTipsshouhin_batch["Japanese"]["REG_PHOTOGRAPHER"] = "";
	$placeHoldersshouhin_batch["Japanese"]["REG_PHOTOGRAPHER"] = "";
	$fieldLabelsshouhin_batch["Japanese"]["REG_KAKOU"] = "加工者";
	$fieldToolTipsshouhin_batch["Japanese"]["REG_KAKOU"] = "";
	$placeHoldersshouhin_batch["Japanese"]["REG_KAKOU"] = "";
	$fieldLabelsshouhin_batch["Japanese"]["REG_PACKINGS"] = "梱包者";
	$fieldToolTipsshouhin_batch["Japanese"]["REG_PACKINGS"] = "";
	$placeHoldersshouhin_batch["Japanese"]["REG_PACKINGS"] = "";
	$fieldLabelsshouhin_batch["Japanese"]["REG_AUTHOR"] = "成約人";
	$fieldToolTipsshouhin_batch["Japanese"]["REG_AUTHOR"] = "";
	$placeHoldersshouhin_batch["Japanese"]["REG_AUTHOR"] = "";
	$fieldLabelsshouhin_batch["Japanese"]["REG_EXHIBITOR"] = "出品者";
	$fieldToolTipsshouhin_batch["Japanese"]["REG_EXHIBITOR"] = "";
	$placeHoldersshouhin_batch["Japanese"]["REG_EXHIBITOR"] = "";
	$fieldLabelsshouhin_batch["Japanese"]["status1"] = "【本番】ステータス";
	$fieldToolTipsshouhin_batch["Japanese"]["status1"] = "";
	$placeHoldersshouhin_batch["Japanese"]["status1"] = "";
	$fieldLabelsshouhin_batch["Japanese"]["title"] = "タイトル";
	$fieldToolTipsshouhin_batch["Japanese"]["title"] = "";
	$placeHoldersshouhin_batch["Japanese"]["title"] = "";
	$fieldLabelsshouhin_batch["Japanese"]["price"] = "買取額";
	$fieldToolTipsshouhin_batch["Japanese"]["price"] = "";
	$placeHoldersshouhin_batch["Japanese"]["price"] = "";
	$fieldLabelsshouhin_batch["Japanese"]["sales_price"] = "販売額";
	$fieldToolTipsshouhin_batch["Japanese"]["sales_price"] = "";
	$placeHoldersshouhin_batch["Japanese"]["sales_price"] = "";
	$fieldLabelsshouhin_batch["Japanese"]["memo"] = "メモ";
	$fieldToolTipsshouhin_batch["Japanese"]["memo"] = "";
	$placeHoldersshouhin_batch["Japanese"]["memo"] = "";
	$fieldLabelsshouhin_batch["Japanese"]["location"] = "ロケーション";
	$fieldToolTipsshouhin_batch["Japanese"]["location"] = "";
	$placeHoldersshouhin_batch["Japanese"]["location"] = "";
	$fieldLabelsshouhin_batch["Japanese"]["chohyo_id"] = "帳票ID";
	$fieldToolTipsshouhin_batch["Japanese"]["chohyo_id"] = "";
	$placeHoldersshouhin_batch["Japanese"]["chohyo_id"] = "";
	$fieldLabelsshouhin_batch["Japanese"]["Remarks"] = "宝飾備考";
	$fieldToolTipsshouhin_batch["Japanese"]["Remarks"] = "";
	$placeHoldersshouhin_batch["Japanese"]["Remarks"] = "";
	$fieldLabelsshouhin_batch["Japanese"]["saisun_start"] = "採寸開始";
	$fieldToolTipsshouhin_batch["Japanese"]["saisun_start"] = "";
	$placeHoldersshouhin_batch["Japanese"]["saisun_start"] = "";
	$fieldLabelsshouhin_batch["Japanese"]["saisun_end"] = "採寸終了";
	$fieldToolTipsshouhin_batch["Japanese"]["saisun_end"] = "";
	$placeHoldersshouhin_batch["Japanese"]["saisun_end"] = "";
	$fieldLabelsshouhin_batch["Japanese"]["satei_hi"] = "査定日";
	$fieldToolTipsshouhin_batch["Japanese"]["satei_hi"] = "";
	$placeHoldersshouhin_batch["Japanese"]["satei_hi"] = "";
	$fieldLabelsshouhin_batch["Japanese"]["DT_UP_DATE"] = "成約日";
	$fieldToolTipsshouhin_batch["Japanese"]["DT_UP_DATE"] = "";
	$placeHoldersshouhin_batch["Japanese"]["DT_UP_DATE"] = "";
	$fieldLabelsshouhin_batch["Japanese"]["REG_PHOTOGRAPHER_DATE"] = "撮影日";
	$fieldToolTipsshouhin_batch["Japanese"]["REG_PHOTOGRAPHER_DATE"] = "";
	$placeHoldersshouhin_batch["Japanese"]["REG_PHOTOGRAPHER_DATE"] = "";
	$fieldLabelsshouhin_batch["Japanese"]["REG_KAKOU_DATE"] = "加工日";
	$fieldToolTipsshouhin_batch["Japanese"]["REG_KAKOU_DATE"] = "";
	$placeHoldersshouhin_batch["Japanese"]["REG_KAKOU_DATE"] = "";
	$fieldLabelsshouhin_batch["Japanese"]["DT_PACKING_DATE"] = "梱包日";
	$fieldToolTipsshouhin_batch["Japanese"]["DT_PACKING_DATE"] = "";
	$placeHoldersshouhin_batch["Japanese"]["DT_PACKING_DATE"] = "";
	$fieldLabelsshouhin_batch["Japanese"]["Exhibition_Date"] = "出品日";
	$fieldToolTipsshouhin_batch["Japanese"]["Exhibition_Date"] = "";
	$placeHoldersshouhin_batch["Japanese"]["Exhibition_Date"] = "";
	$fieldLabelsshouhin_batch["Japanese"]["product_num"] = "ブランドID";
	$fieldToolTipsshouhin_batch["Japanese"]["product_num"] = "";
	$placeHoldersshouhin_batch["Japanese"]["product_num"] = "";
	$fieldLabelsshouhin_batch["Japanese"]["category_id"] = "大カテゴリー";
	$fieldToolTipsshouhin_batch["Japanese"]["category_id"] = "";
	$placeHoldersshouhin_batch["Japanese"]["category_id"] = "";
	$fieldLabelsshouhin_batch["Japanese"]["sub_category_id1"] = "中カテゴリー";
	$fieldToolTipsshouhin_batch["Japanese"]["sub_category_id1"] = "";
	$placeHoldersshouhin_batch["Japanese"]["sub_category_id1"] = "";
	$fieldLabelsshouhin_batch["Japanese"]["cost"] = "仕上コスト";
	$fieldToolTipsshouhin_batch["Japanese"]["cost"] = "";
	$placeHoldersshouhin_batch["Japanese"]["cost"] = "";
	$fieldLabelsshouhin_batch["Japanese"]["serial_number_for_storage"] = "機番（保管用）";
	$fieldToolTipsshouhin_batch["Japanese"]["serial_number_for_storage"] = "";
	$placeHoldersshouhin_batch["Japanese"]["serial_number_for_storage"] = "";
	$fieldLabelsshouhin_batch["Japanese"]["identification_cost"] = "鑑別コスト";
	$fieldToolTipsshouhin_batch["Japanese"]["identification_cost"] = "";
	$placeHoldersshouhin_batch["Japanese"]["identification_cost"] = "";
	$fieldLabelsshouhin_batch["Japanese"]["other_cost"] = "その他コスト";
	$fieldToolTipsshouhin_batch["Japanese"]["other_cost"] = "";
	$placeHoldersshouhin_batch["Japanese"]["other_cost"] = "";
	$fieldLabelsshouhin_batch["Japanese"]["Eoc_trader_id_for_buy"] = "業者仕入ID";
	$fieldToolTipsshouhin_batch["Japanese"]["Eoc_trader_id_for_buy"] = "";
	$placeHoldersshouhin_batch["Japanese"]["Eoc_trader_id_for_buy"] = "";
	$fieldLabelsshouhin_batch["Japanese"]["Eoc_trader_id_for_sell"] = "業者販売ID";
	$fieldToolTipsshouhin_batch["Japanese"]["Eoc_trader_id_for_sell"] = "";
	$placeHoldersshouhin_batch["Japanese"]["Eoc_trader_id_for_sell"] = "";
	$fieldLabelsshouhin_batch["Japanese"]["destination_sold_out"] = "販売先";
	$fieldToolTipsshouhin_batch["Japanese"]["destination_sold_out"] = "";
	$placeHoldersshouhin_batch["Japanese"]["destination_sold_out"] = "";
	$fieldLabelsshouhin_batch["Japanese"]["kanryou_henbi"] = "完了変更日";
	$fieldToolTipsshouhin_batch["Japanese"]["kanryou_henbi"] = "";
	$placeHoldersshouhin_batch["Japanese"]["kanryou_henbi"] = "";
	if (count($fieldToolTipsshouhin_batch["Japanese"]))
		$tdatashouhin_batch[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsshouhin_batch[""] = array();
	$fieldToolTipsshouhin_batch[""] = array();
	$placeHoldersshouhin_batch[""] = array();
	$pageTitlesshouhin_batch[""] = array();
	$fieldLabelsshouhin_batch[""]["cost"] = "Cost";
	$fieldToolTipsshouhin_batch[""]["cost"] = "";
	$placeHoldersshouhin_batch[""]["cost"] = "";
	$fieldLabelsshouhin_batch[""]["serial_number_for_storage"] = "Serial Number For Storage";
	$fieldToolTipsshouhin_batch[""]["serial_number_for_storage"] = "";
	$placeHoldersshouhin_batch[""]["serial_number_for_storage"] = "";
	$fieldLabelsshouhin_batch[""]["identification_cost"] = "Identification Cost";
	$fieldToolTipsshouhin_batch[""]["identification_cost"] = "";
	$placeHoldersshouhin_batch[""]["identification_cost"] = "";
	$fieldLabelsshouhin_batch[""]["other_cost"] = "Other Cost";
	$fieldToolTipsshouhin_batch[""]["other_cost"] = "";
	$placeHoldersshouhin_batch[""]["other_cost"] = "";
	$fieldLabelsshouhin_batch[""]["Eoc_trader_id_for_buy"] = "Eoc Trader Id For Buy";
	$fieldToolTipsshouhin_batch[""]["Eoc_trader_id_for_buy"] = "";
	$placeHoldersshouhin_batch[""]["Eoc_trader_id_for_buy"] = "";
	$fieldLabelsshouhin_batch[""]["Eoc_trader_id_for_sell"] = "Eoc Trader Id For Sell";
	$fieldToolTipsshouhin_batch[""]["Eoc_trader_id_for_sell"] = "";
	$placeHoldersshouhin_batch[""]["Eoc_trader_id_for_sell"] = "";
	$fieldLabelsshouhin_batch[""]["destination_sold_out"] = "Destination Sold Out";
	$fieldToolTipsshouhin_batch[""]["destination_sold_out"] = "";
	$placeHoldersshouhin_batch[""]["destination_sold_out"] = "";
	$fieldLabelsshouhin_batch[""]["kanryou_henbi"] = "Kanryou Henbi";
	$fieldToolTipsshouhin_batch[""]["kanryou_henbi"] = "";
	$placeHoldersshouhin_batch[""]["kanryou_henbi"] = "";
	if (count($fieldToolTipsshouhin_batch[""]))
		$tdatashouhin_batch[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsshouhin_batch["English"] = array();
	$fieldToolTipsshouhin_batch["English"] = array();
	$placeHoldersshouhin_batch["English"] = array();
	$pageTitlesshouhin_batch["English"] = array();
	$fieldLabelsshouhin_batch["English"]["cost"] = "Cost";
	$fieldToolTipsshouhin_batch["English"]["cost"] = "";
	$placeHoldersshouhin_batch["English"]["cost"] = "";
	$fieldLabelsshouhin_batch["English"]["serial_number_for_storage"] = "Serial Number For Storage";
	$fieldToolTipsshouhin_batch["English"]["serial_number_for_storage"] = "";
	$placeHoldersshouhin_batch["English"]["serial_number_for_storage"] = "";
	$fieldLabelsshouhin_batch["English"]["identification_cost"] = "Identification Cost";
	$fieldToolTipsshouhin_batch["English"]["identification_cost"] = "";
	$placeHoldersshouhin_batch["English"]["identification_cost"] = "";
	$fieldLabelsshouhin_batch["English"]["other_cost"] = "Other Cost";
	$fieldToolTipsshouhin_batch["English"]["other_cost"] = "";
	$placeHoldersshouhin_batch["English"]["other_cost"] = "";
	$fieldLabelsshouhin_batch["English"]["Eoc_trader_id_for_buy"] = "Eoc Trader Id For Buy";
	$fieldToolTipsshouhin_batch["English"]["Eoc_trader_id_for_buy"] = "";
	$placeHoldersshouhin_batch["English"]["Eoc_trader_id_for_buy"] = "";
	$fieldLabelsshouhin_batch["English"]["Eoc_trader_id_for_sell"] = "Eoc Trader Id For Sell";
	$fieldToolTipsshouhin_batch["English"]["Eoc_trader_id_for_sell"] = "";
	$placeHoldersshouhin_batch["English"]["Eoc_trader_id_for_sell"] = "";
	$fieldLabelsshouhin_batch["English"]["destination_sold_out"] = "Destination Sold Out";
	$fieldToolTipsshouhin_batch["English"]["destination_sold_out"] = "";
	$placeHoldersshouhin_batch["English"]["destination_sold_out"] = "";
	$fieldLabelsshouhin_batch["English"]["kanryou_henbi"] = "Kanryou Henbi";
	$fieldToolTipsshouhin_batch["English"]["kanryou_henbi"] = "";
	$placeHoldersshouhin_batch["English"]["kanryou_henbi"] = "";
	if (count($fieldToolTipsshouhin_batch["English"]))
		$tdatashouhin_batch[".isUseToolTips"] = true;
}


	$tdatashouhin_batch[".NCSearch"] = true;



$tdatashouhin_batch[".shortTableName"] = "shouhin_batch";
$tdatashouhin_batch[".nSecOptions"] = 0;
$tdatashouhin_batch[".recsPerRowPrint"] = 1;
$tdatashouhin_batch[".mainTableOwnerID"] = "";
$tdatashouhin_batch[".moveNext"] = 1;
$tdatashouhin_batch[".entityType"] = 0;

$tdatashouhin_batch[".strOriginalTableName"] = "shouhin_batch";

	



$tdatashouhin_batch[".showAddInPopup"] = false;

$tdatashouhin_batch[".showEditInPopup"] = false;

$tdatashouhin_batch[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatashouhin_batch[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatashouhin_batch[".fieldsForRegister"] = array();

$tdatashouhin_batch[".listAjax"] = false;

	$tdatashouhin_batch[".audit"] = true;

	$tdatashouhin_batch[".locking"] = false;



$tdatashouhin_batch[".list"] = true;

$tdatashouhin_batch[".inlineEdit"] = true;


$tdatashouhin_batch[".reorderRecordsByHeader"] = true;
$tdatashouhin_batch[".createSortByDropdown"] = true;
$tdatashouhin_batch[".strSortControlSettingsJSON"] = "";



$tdatashouhin_batch[".inlineAdd"] = true;
$tdatashouhin_batch[".view"] = true;

$tdatashouhin_batch[".import"] = true;

$tdatashouhin_batch[".exportTo"] = true;

$tdatashouhin_batch[".printFriendly"] = true;

$tdatashouhin_batch[".delete"] = true;

$tdatashouhin_batch[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatashouhin_batch[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatashouhin_batch[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatashouhin_batch[".searchSaving"] = false;
//

$tdatashouhin_batch[".showSearchPanel"] = true;
		$tdatashouhin_batch[".flexibleSearch"] = true;

$tdatashouhin_batch[".isUseAjaxSuggest"] = true;

$tdatashouhin_batch[".rowHighlite"] = true;



												
					
					
					
						
					
					
							
																										
					
					
																																																																																																				
					
					
					
																			
					
											
						
							
																													
					
												
					
					
					
					
					
					
					
					
					
					
					
								

$tdatashouhin_batch[".ajaxCodeSnippetAdded"] = false;

$tdatashouhin_batch[".buttonsAdded"] = true;

$tdatashouhin_batch[".addPageEvents"] = true;

// use timepicker for search panel
$tdatashouhin_batch[".isUseTimeForSearch"] = false;





$tdatashouhin_batch[".allSearchFields"] = array();
$tdatashouhin_batch[".filterFields"] = array();
$tdatashouhin_batch[".requiredSearchFields"] = array();

$tdatashouhin_batch[".allSearchFields"][] = "product_id";
	$tdatashouhin_batch[".allSearchFields"][] = "yahoo_sinaban";
	$tdatashouhin_batch[".allSearchFields"][] = "product_num";
	$tdatashouhin_batch[".allSearchFields"][] = "serial_number_for_storage";
	$tdatashouhin_batch[".allSearchFields"][] = "category_id";
	$tdatashouhin_batch[".allSearchFields"][] = "sub_category_id1";
	$tdatashouhin_batch[".allSearchFields"][] = "title";
	$tdatashouhin_batch[".allSearchFields"][] = "price";
	$tdatashouhin_batch[".allSearchFields"][] = "cost";
	$tdatashouhin_batch[".allSearchFields"][] = "identification_cost";
	$tdatashouhin_batch[".allSearchFields"][] = "other_cost";
	$tdatashouhin_batch[".allSearchFields"][] = "sales_price";
	$tdatashouhin_batch[".allSearchFields"][] = "nyuukin_price";
	$tdatashouhin_batch[".allSearchFields"][] = "comment";
	$tdatashouhin_batch[".allSearchFields"][] = "memo";
	$tdatashouhin_batch[".allSearchFields"][] = "Remarks";
	$tdatashouhin_batch[".allSearchFields"][] = "satei_by";
	$tdatashouhin_batch[".allSearchFields"][] = "satei_hi";
	$tdatashouhin_batch[".allSearchFields"][] = "yahoo_saisun_sha";
	$tdatashouhin_batch[".allSearchFields"][] = "saisun_start";
	$tdatashouhin_batch[".allSearchFields"][] = "saisun_end";
	$tdatashouhin_batch[".allSearchFields"][] = "REG_PHOTOGRAPHER";
	$tdatashouhin_batch[".allSearchFields"][] = "REG_PHOTOGRAPHER_DATE";
	$tdatashouhin_batch[".allSearchFields"][] = "REG_KAKOU";
	$tdatashouhin_batch[".allSearchFields"][] = "REG_KAKOU_DATE";
	$tdatashouhin_batch[".allSearchFields"][] = "REG_PACKINGS";
	$tdatashouhin_batch[".allSearchFields"][] = "DT_PACKING_DATE";
	$tdatashouhin_batch[".allSearchFields"][] = "REG_AUTHOR";
	$tdatashouhin_batch[".allSearchFields"][] = "DT_UP_DATE";
	$tdatashouhin_batch[".allSearchFields"][] = "REG_EXHIBITOR";
	$tdatashouhin_batch[".allSearchFields"][] = "Exhibition_Date";
	$tdatashouhin_batch[".allSearchFields"][] = "status";
	$tdatashouhin_batch[".allSearchFields"][] = "status1";
	$tdatashouhin_batch[".allSearchFields"][] = "location";
	$tdatashouhin_batch[".allSearchFields"][] = "chohyo_id";
	$tdatashouhin_batch[".allSearchFields"][] = "Eoc_trader_id_for_buy";
	$tdatashouhin_batch[".allSearchFields"][] = "Eoc_trader_id_for_sell";
	$tdatashouhin_batch[".allSearchFields"][] = "destination_sold_out";
	$tdatashouhin_batch[".allSearchFields"][] = "kanryou_henbi";
	

$tdatashouhin_batch[".googleLikeFields"] = array();
$tdatashouhin_batch[".googleLikeFields"][] = "id";
$tdatashouhin_batch[".googleLikeFields"][] = "product_id";
$tdatashouhin_batch[".googleLikeFields"][] = "yahoo_sinaban";
$tdatashouhin_batch[".googleLikeFields"][] = "nyuukin_price";
$tdatashouhin_batch[".googleLikeFields"][] = "comment";
$tdatashouhin_batch[".googleLikeFields"][] = "status";
$tdatashouhin_batch[".googleLikeFields"][] = "yahoo_saisun_sha";
$tdatashouhin_batch[".googleLikeFields"][] = "REG_PHOTOGRAPHER";
$tdatashouhin_batch[".googleLikeFields"][] = "REG_KAKOU";
$tdatashouhin_batch[".googleLikeFields"][] = "REG_PACKINGS";
$tdatashouhin_batch[".googleLikeFields"][] = "REG_AUTHOR";
$tdatashouhin_batch[".googleLikeFields"][] = "REG_EXHIBITOR";
$tdatashouhin_batch[".googleLikeFields"][] = "status1";
$tdatashouhin_batch[".googleLikeFields"][] = "title";
$tdatashouhin_batch[".googleLikeFields"][] = "price";
$tdatashouhin_batch[".googleLikeFields"][] = "sales_price";
$tdatashouhin_batch[".googleLikeFields"][] = "memo";
$tdatashouhin_batch[".googleLikeFields"][] = "location";
$tdatashouhin_batch[".googleLikeFields"][] = "chohyo_id";
$tdatashouhin_batch[".googleLikeFields"][] = "Remarks";
$tdatashouhin_batch[".googleLikeFields"][] = "saisun_start";
$tdatashouhin_batch[".googleLikeFields"][] = "saisun_end";
$tdatashouhin_batch[".googleLikeFields"][] = "satei_hi";
$tdatashouhin_batch[".googleLikeFields"][] = "DT_UP_DATE";
$tdatashouhin_batch[".googleLikeFields"][] = "REG_PHOTOGRAPHER_DATE";
$tdatashouhin_batch[".googleLikeFields"][] = "REG_KAKOU_DATE";
$tdatashouhin_batch[".googleLikeFields"][] = "DT_PACKING_DATE";
$tdatashouhin_batch[".googleLikeFields"][] = "Exhibition_Date";
$tdatashouhin_batch[".googleLikeFields"][] = "product_num";
$tdatashouhin_batch[".googleLikeFields"][] = "category_id";
$tdatashouhin_batch[".googleLikeFields"][] = "sub_category_id1";
$tdatashouhin_batch[".googleLikeFields"][] = "satei_by";
$tdatashouhin_batch[".googleLikeFields"][] = "cost";
$tdatashouhin_batch[".googleLikeFields"][] = "identification_cost";
$tdatashouhin_batch[".googleLikeFields"][] = "other_cost";
$tdatashouhin_batch[".googleLikeFields"][] = "serial_number_for_storage";
$tdatashouhin_batch[".googleLikeFields"][] = "Eoc_trader_id_for_buy";
$tdatashouhin_batch[".googleLikeFields"][] = "Eoc_trader_id_for_sell";
$tdatashouhin_batch[".googleLikeFields"][] = "destination_sold_out";
$tdatashouhin_batch[".googleLikeFields"][] = "kanryou_henbi";


$tdatashouhin_batch[".advSearchFields"] = array();
$tdatashouhin_batch[".advSearchFields"][] = "product_id";
$tdatashouhin_batch[".advSearchFields"][] = "yahoo_sinaban";
$tdatashouhin_batch[".advSearchFields"][] = "product_num";
$tdatashouhin_batch[".advSearchFields"][] = "serial_number_for_storage";
$tdatashouhin_batch[".advSearchFields"][] = "category_id";
$tdatashouhin_batch[".advSearchFields"][] = "sub_category_id1";
$tdatashouhin_batch[".advSearchFields"][] = "title";
$tdatashouhin_batch[".advSearchFields"][] = "price";
$tdatashouhin_batch[".advSearchFields"][] = "cost";
$tdatashouhin_batch[".advSearchFields"][] = "identification_cost";
$tdatashouhin_batch[".advSearchFields"][] = "other_cost";
$tdatashouhin_batch[".advSearchFields"][] = "sales_price";
$tdatashouhin_batch[".advSearchFields"][] = "nyuukin_price";
$tdatashouhin_batch[".advSearchFields"][] = "comment";
$tdatashouhin_batch[".advSearchFields"][] = "memo";
$tdatashouhin_batch[".advSearchFields"][] = "Remarks";
$tdatashouhin_batch[".advSearchFields"][] = "satei_by";
$tdatashouhin_batch[".advSearchFields"][] = "satei_hi";
$tdatashouhin_batch[".advSearchFields"][] = "yahoo_saisun_sha";
$tdatashouhin_batch[".advSearchFields"][] = "saisun_start";
$tdatashouhin_batch[".advSearchFields"][] = "saisun_end";
$tdatashouhin_batch[".advSearchFields"][] = "REG_PHOTOGRAPHER";
$tdatashouhin_batch[".advSearchFields"][] = "REG_PHOTOGRAPHER_DATE";
$tdatashouhin_batch[".advSearchFields"][] = "REG_KAKOU";
$tdatashouhin_batch[".advSearchFields"][] = "REG_KAKOU_DATE";
$tdatashouhin_batch[".advSearchFields"][] = "REG_PACKINGS";
$tdatashouhin_batch[".advSearchFields"][] = "DT_PACKING_DATE";
$tdatashouhin_batch[".advSearchFields"][] = "REG_AUTHOR";
$tdatashouhin_batch[".advSearchFields"][] = "DT_UP_DATE";
$tdatashouhin_batch[".advSearchFields"][] = "REG_EXHIBITOR";
$tdatashouhin_batch[".advSearchFields"][] = "Exhibition_Date";
$tdatashouhin_batch[".advSearchFields"][] = "status";
$tdatashouhin_batch[".advSearchFields"][] = "status1";
$tdatashouhin_batch[".advSearchFields"][] = "location";
$tdatashouhin_batch[".advSearchFields"][] = "chohyo_id";
$tdatashouhin_batch[".advSearchFields"][] = "Eoc_trader_id_for_buy";
$tdatashouhin_batch[".advSearchFields"][] = "Eoc_trader_id_for_sell";
$tdatashouhin_batch[".advSearchFields"][] = "destination_sold_out";
$tdatashouhin_batch[".advSearchFields"][] = "kanryou_henbi";

$tdatashouhin_batch[".tableType"] = "list";

$tdatashouhin_batch[".printerPageOrientation"] = 0;
$tdatashouhin_batch[".nPrinterPageScale"] = 100;

$tdatashouhin_batch[".nPrinterSplitRecords"] = 40;

$tdatashouhin_batch[".nPrinterPDFSplitRecords"] = 40;



$tdatashouhin_batch[".geocodingEnabled"] = false;





$tdatashouhin_batch[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatashouhin_batch[".pageSize"] = 20;

$tdatashouhin_batch[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `shouhin_batch`.`id`";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatashouhin_batch[".strOrderBy"] = $tstrOrderBy;

$tdatashouhin_batch[".orderindexes"] = array();
$tdatashouhin_batch[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "`shouhin_batch`.`id`");

$tdatashouhin_batch[".sqlHead"] = "SELECT `shouhin_batch`.`id`,  `shouhin_batch`.`product_id`,  `shouhin_batch`.`yahoo_sinaban`,  `shouhin_batch`.`nyuukin_price`,  `shouhin_batch`.`comment`,  `shouhin_batch`.`status`,  `shouhin`.`yahoo_saisun_sha`,  `shouhin`.`REG_PHOTOGRAPHER`,  `shouhin`.`REG_KAKOU`,  `shouhin`.`REG_PACKINGS`,  `shouhin`.`REG_AUTHOR`,  `shouhin`.`REG_EXHIBITOR`,  `shouhin`.`status` AS `status1`,  `shouhin_batch`.`title`,  `shouhin_batch`.`price`,  `shouhin_batch`.`sales_price`,  `shouhin_batch`.`memo`,  `shouhin_batch`.`location`,  `shouhin_batch`.`chohyo_id`,  `shouhin_batch`.`Remarks`,  `shouhin`.`saisun_start`,  `shouhin`.`saisun_end`,  `shouhin`.`satei_hi`,  `shouhin`.`DT_UP_DATE`,  `shouhin`.`REG_PHOTOGRAPHER_DATE`,  `shouhin`.`REG_KAKOU_DATE`,  `shouhin`.`DT_PACKING_DATE`,  `shouhin`.`Exhibition_Date`,  `shouhin_batch`.`product_num`,  `shouhin_batch`.`category_id`,  `shouhin_batch`.`sub_category_id1`,  `shouhin_batch`.`satei_by`,  `shouhin_batch`.`cost`,  `shouhin_batch`.`identification_cost`,  `shouhin_batch`.`other_cost`,  `shouhin_batch`.`serial_number_for_storage`,  `shouhin_batch`.`Eoc_trader_id_for_buy`,  `shouhin_batch`.`Eoc_trader_id_for_sell`,  `shouhin_batch`.`destination_sold_out`,  `shouhin_batch`.`kanryou_henbi`";
$tdatashouhin_batch[".sqlFrom"] = "FROM `shouhin_batch`  LEFT OUTER JOIN `shouhin` ON `shouhin_batch`.`product_id` = `shouhin`.`product_id`";
$tdatashouhin_batch[".sqlWhereExpr"] = "";
$tdatashouhin_batch[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatashouhin_batch[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatashouhin_batch[".arrGroupsPerPage"] = $arrGPP;

$tdatashouhin_batch[".highlightSearchResults"] = true;

$tableKeysshouhin_batch = array();
$tableKeysshouhin_batch[] = "id";
$tdatashouhin_batch[".Keys"] = $tableKeysshouhin_batch;

$tdatashouhin_batch[".listFields"] = array();
$tdatashouhin_batch[".listFields"][] = "id";
$tdatashouhin_batch[".listFields"][] = "product_id";
$tdatashouhin_batch[".listFields"][] = "yahoo_sinaban";
$tdatashouhin_batch[".listFields"][] = "product_num";
$tdatashouhin_batch[".listFields"][] = "serial_number_for_storage";
$tdatashouhin_batch[".listFields"][] = "category_id";
$tdatashouhin_batch[".listFields"][] = "sub_category_id1";
$tdatashouhin_batch[".listFields"][] = "title";
$tdatashouhin_batch[".listFields"][] = "price";
$tdatashouhin_batch[".listFields"][] = "cost";
$tdatashouhin_batch[".listFields"][] = "identification_cost";
$tdatashouhin_batch[".listFields"][] = "other_cost";
$tdatashouhin_batch[".listFields"][] = "sales_price";
$tdatashouhin_batch[".listFields"][] = "nyuukin_price";
$tdatashouhin_batch[".listFields"][] = "comment";
$tdatashouhin_batch[".listFields"][] = "memo";
$tdatashouhin_batch[".listFields"][] = "Remarks";
$tdatashouhin_batch[".listFields"][] = "satei_by";
$tdatashouhin_batch[".listFields"][] = "satei_hi";
$tdatashouhin_batch[".listFields"][] = "yahoo_saisun_sha";
$tdatashouhin_batch[".listFields"][] = "saisun_start";
$tdatashouhin_batch[".listFields"][] = "saisun_end";
$tdatashouhin_batch[".listFields"][] = "REG_PHOTOGRAPHER";
$tdatashouhin_batch[".listFields"][] = "REG_PHOTOGRAPHER_DATE";
$tdatashouhin_batch[".listFields"][] = "REG_KAKOU";
$tdatashouhin_batch[".listFields"][] = "REG_KAKOU_DATE";
$tdatashouhin_batch[".listFields"][] = "REG_PACKINGS";
$tdatashouhin_batch[".listFields"][] = "DT_PACKING_DATE";
$tdatashouhin_batch[".listFields"][] = "REG_AUTHOR";
$tdatashouhin_batch[".listFields"][] = "DT_UP_DATE";
$tdatashouhin_batch[".listFields"][] = "REG_EXHIBITOR";
$tdatashouhin_batch[".listFields"][] = "Exhibition_Date";
$tdatashouhin_batch[".listFields"][] = "status";
$tdatashouhin_batch[".listFields"][] = "status1";
$tdatashouhin_batch[".listFields"][] = "location";
$tdatashouhin_batch[".listFields"][] = "chohyo_id";
$tdatashouhin_batch[".listFields"][] = "Eoc_trader_id_for_buy";
$tdatashouhin_batch[".listFields"][] = "Eoc_trader_id_for_sell";
$tdatashouhin_batch[".listFields"][] = "destination_sold_out";
$tdatashouhin_batch[".listFields"][] = "kanryou_henbi";

$tdatashouhin_batch[".hideMobileList"] = array();


$tdatashouhin_batch[".viewFields"] = array();
$tdatashouhin_batch[".viewFields"][] = "product_id";
$tdatashouhin_batch[".viewFields"][] = "yahoo_sinaban";
$tdatashouhin_batch[".viewFields"][] = "product_num";
$tdatashouhin_batch[".viewFields"][] = "serial_number_for_storage";
$tdatashouhin_batch[".viewFields"][] = "category_id";
$tdatashouhin_batch[".viewFields"][] = "sub_category_id1";
$tdatashouhin_batch[".viewFields"][] = "title";
$tdatashouhin_batch[".viewFields"][] = "price";
$tdatashouhin_batch[".viewFields"][] = "cost";
$tdatashouhin_batch[".viewFields"][] = "identification_cost";
$tdatashouhin_batch[".viewFields"][] = "other_cost";
$tdatashouhin_batch[".viewFields"][] = "sales_price";
$tdatashouhin_batch[".viewFields"][] = "nyuukin_price";
$tdatashouhin_batch[".viewFields"][] = "comment";
$tdatashouhin_batch[".viewFields"][] = "memo";
$tdatashouhin_batch[".viewFields"][] = "Remarks";
$tdatashouhin_batch[".viewFields"][] = "satei_by";
$tdatashouhin_batch[".viewFields"][] = "satei_hi";
$tdatashouhin_batch[".viewFields"][] = "yahoo_saisun_sha";
$tdatashouhin_batch[".viewFields"][] = "saisun_start";
$tdatashouhin_batch[".viewFields"][] = "saisun_end";
$tdatashouhin_batch[".viewFields"][] = "REG_PHOTOGRAPHER";
$tdatashouhin_batch[".viewFields"][] = "REG_PHOTOGRAPHER_DATE";
$tdatashouhin_batch[".viewFields"][] = "REG_KAKOU";
$tdatashouhin_batch[".viewFields"][] = "REG_KAKOU_DATE";
$tdatashouhin_batch[".viewFields"][] = "REG_PACKINGS";
$tdatashouhin_batch[".viewFields"][] = "DT_PACKING_DATE";
$tdatashouhin_batch[".viewFields"][] = "REG_AUTHOR";
$tdatashouhin_batch[".viewFields"][] = "DT_UP_DATE";
$tdatashouhin_batch[".viewFields"][] = "REG_EXHIBITOR";
$tdatashouhin_batch[".viewFields"][] = "Exhibition_Date";
$tdatashouhin_batch[".viewFields"][] = "status";
$tdatashouhin_batch[".viewFields"][] = "status1";
$tdatashouhin_batch[".viewFields"][] = "location";
$tdatashouhin_batch[".viewFields"][] = "chohyo_id";
$tdatashouhin_batch[".viewFields"][] = "Eoc_trader_id_for_buy";
$tdatashouhin_batch[".viewFields"][] = "Eoc_trader_id_for_sell";
$tdatashouhin_batch[".viewFields"][] = "destination_sold_out";
$tdatashouhin_batch[".viewFields"][] = "kanryou_henbi";

$tdatashouhin_batch[".addFields"] = array();

$tdatashouhin_batch[".masterListFields"] = array();
$tdatashouhin_batch[".masterListFields"][] = "id";
$tdatashouhin_batch[".masterListFields"][] = "product_id";
$tdatashouhin_batch[".masterListFields"][] = "yahoo_sinaban";
$tdatashouhin_batch[".masterListFields"][] = "product_num";
$tdatashouhin_batch[".masterListFields"][] = "serial_number_for_storage";
$tdatashouhin_batch[".masterListFields"][] = "category_id";
$tdatashouhin_batch[".masterListFields"][] = "sub_category_id1";
$tdatashouhin_batch[".masterListFields"][] = "title";
$tdatashouhin_batch[".masterListFields"][] = "price";
$tdatashouhin_batch[".masterListFields"][] = "cost";
$tdatashouhin_batch[".masterListFields"][] = "identification_cost";
$tdatashouhin_batch[".masterListFields"][] = "other_cost";
$tdatashouhin_batch[".masterListFields"][] = "sales_price";
$tdatashouhin_batch[".masterListFields"][] = "nyuukin_price";
$tdatashouhin_batch[".masterListFields"][] = "comment";
$tdatashouhin_batch[".masterListFields"][] = "memo";
$tdatashouhin_batch[".masterListFields"][] = "Remarks";
$tdatashouhin_batch[".masterListFields"][] = "satei_by";
$tdatashouhin_batch[".masterListFields"][] = "satei_hi";
$tdatashouhin_batch[".masterListFields"][] = "yahoo_saisun_sha";
$tdatashouhin_batch[".masterListFields"][] = "saisun_start";
$tdatashouhin_batch[".masterListFields"][] = "saisun_end";
$tdatashouhin_batch[".masterListFields"][] = "REG_PHOTOGRAPHER";
$tdatashouhin_batch[".masterListFields"][] = "REG_PHOTOGRAPHER_DATE";
$tdatashouhin_batch[".masterListFields"][] = "REG_KAKOU";
$tdatashouhin_batch[".masterListFields"][] = "REG_KAKOU_DATE";
$tdatashouhin_batch[".masterListFields"][] = "REG_PACKINGS";
$tdatashouhin_batch[".masterListFields"][] = "DT_PACKING_DATE";
$tdatashouhin_batch[".masterListFields"][] = "REG_AUTHOR";
$tdatashouhin_batch[".masterListFields"][] = "DT_UP_DATE";
$tdatashouhin_batch[".masterListFields"][] = "REG_EXHIBITOR";
$tdatashouhin_batch[".masterListFields"][] = "Exhibition_Date";
$tdatashouhin_batch[".masterListFields"][] = "status";
$tdatashouhin_batch[".masterListFields"][] = "status1";
$tdatashouhin_batch[".masterListFields"][] = "location";
$tdatashouhin_batch[".masterListFields"][] = "chohyo_id";
$tdatashouhin_batch[".masterListFields"][] = "Eoc_trader_id_for_buy";
$tdatashouhin_batch[".masterListFields"][] = "Eoc_trader_id_for_sell";
$tdatashouhin_batch[".masterListFields"][] = "destination_sold_out";
$tdatashouhin_batch[".masterListFields"][] = "kanryou_henbi";

$tdatashouhin_batch[".inlineAddFields"] = array();
$tdatashouhin_batch[".inlineAddFields"][] = "product_id";
$tdatashouhin_batch[".inlineAddFields"][] = "yahoo_sinaban";
$tdatashouhin_batch[".inlineAddFields"][] = "product_num";
$tdatashouhin_batch[".inlineAddFields"][] = "serial_number_for_storage";
$tdatashouhin_batch[".inlineAddFields"][] = "category_id";
$tdatashouhin_batch[".inlineAddFields"][] = "sub_category_id1";
$tdatashouhin_batch[".inlineAddFields"][] = "title";
$tdatashouhin_batch[".inlineAddFields"][] = "price";
$tdatashouhin_batch[".inlineAddFields"][] = "cost";
$tdatashouhin_batch[".inlineAddFields"][] = "identification_cost";
$tdatashouhin_batch[".inlineAddFields"][] = "other_cost";
$tdatashouhin_batch[".inlineAddFields"][] = "sales_price";
$tdatashouhin_batch[".inlineAddFields"][] = "nyuukin_price";
$tdatashouhin_batch[".inlineAddFields"][] = "comment";
$tdatashouhin_batch[".inlineAddFields"][] = "memo";
$tdatashouhin_batch[".inlineAddFields"][] = "Remarks";
$tdatashouhin_batch[".inlineAddFields"][] = "satei_by";
$tdatashouhin_batch[".inlineAddFields"][] = "status";
$tdatashouhin_batch[".inlineAddFields"][] = "location";
$tdatashouhin_batch[".inlineAddFields"][] = "chohyo_id";
$tdatashouhin_batch[".inlineAddFields"][] = "Eoc_trader_id_for_buy";
$tdatashouhin_batch[".inlineAddFields"][] = "Eoc_trader_id_for_sell";
$tdatashouhin_batch[".inlineAddFields"][] = "destination_sold_out";
$tdatashouhin_batch[".inlineAddFields"][] = "kanryou_henbi";

$tdatashouhin_batch[".editFields"] = array();

$tdatashouhin_batch[".inlineEditFields"] = array();
$tdatashouhin_batch[".inlineEditFields"][] = "product_id";
$tdatashouhin_batch[".inlineEditFields"][] = "yahoo_sinaban";
$tdatashouhin_batch[".inlineEditFields"][] = "product_num";
$tdatashouhin_batch[".inlineEditFields"][] = "serial_number_for_storage";
$tdatashouhin_batch[".inlineEditFields"][] = "category_id";
$tdatashouhin_batch[".inlineEditFields"][] = "sub_category_id1";
$tdatashouhin_batch[".inlineEditFields"][] = "title";
$tdatashouhin_batch[".inlineEditFields"][] = "price";
$tdatashouhin_batch[".inlineEditFields"][] = "cost";
$tdatashouhin_batch[".inlineEditFields"][] = "identification_cost";
$tdatashouhin_batch[".inlineEditFields"][] = "other_cost";
$tdatashouhin_batch[".inlineEditFields"][] = "sales_price";
$tdatashouhin_batch[".inlineEditFields"][] = "nyuukin_price";
$tdatashouhin_batch[".inlineEditFields"][] = "comment";
$tdatashouhin_batch[".inlineEditFields"][] = "memo";
$tdatashouhin_batch[".inlineEditFields"][] = "Remarks";
$tdatashouhin_batch[".inlineEditFields"][] = "satei_by";
$tdatashouhin_batch[".inlineEditFields"][] = "status";
$tdatashouhin_batch[".inlineEditFields"][] = "location";
$tdatashouhin_batch[".inlineEditFields"][] = "chohyo_id";
$tdatashouhin_batch[".inlineEditFields"][] = "Eoc_trader_id_for_buy";
$tdatashouhin_batch[".inlineEditFields"][] = "Eoc_trader_id_for_sell";
$tdatashouhin_batch[".inlineEditFields"][] = "destination_sold_out";
$tdatashouhin_batch[".inlineEditFields"][] = "kanryou_henbi";

$tdatashouhin_batch[".updateSelectedFields"] = array();


$tdatashouhin_batch[".exportFields"] = array();
$tdatashouhin_batch[".exportFields"][] = "id";
$tdatashouhin_batch[".exportFields"][] = "product_id";
$tdatashouhin_batch[".exportFields"][] = "yahoo_sinaban";
$tdatashouhin_batch[".exportFields"][] = "product_num";
$tdatashouhin_batch[".exportFields"][] = "serial_number_for_storage";
$tdatashouhin_batch[".exportFields"][] = "category_id";
$tdatashouhin_batch[".exportFields"][] = "sub_category_id1";
$tdatashouhin_batch[".exportFields"][] = "title";
$tdatashouhin_batch[".exportFields"][] = "price";
$tdatashouhin_batch[".exportFields"][] = "cost";
$tdatashouhin_batch[".exportFields"][] = "identification_cost";
$tdatashouhin_batch[".exportFields"][] = "other_cost";
$tdatashouhin_batch[".exportFields"][] = "sales_price";
$tdatashouhin_batch[".exportFields"][] = "nyuukin_price";
$tdatashouhin_batch[".exportFields"][] = "comment";
$tdatashouhin_batch[".exportFields"][] = "memo";
$tdatashouhin_batch[".exportFields"][] = "Remarks";
$tdatashouhin_batch[".exportFields"][] = "satei_by";
$tdatashouhin_batch[".exportFields"][] = "satei_hi";
$tdatashouhin_batch[".exportFields"][] = "yahoo_saisun_sha";
$tdatashouhin_batch[".exportFields"][] = "saisun_start";
$tdatashouhin_batch[".exportFields"][] = "saisun_end";
$tdatashouhin_batch[".exportFields"][] = "REG_PHOTOGRAPHER";
$tdatashouhin_batch[".exportFields"][] = "REG_PHOTOGRAPHER_DATE";
$tdatashouhin_batch[".exportFields"][] = "REG_KAKOU";
$tdatashouhin_batch[".exportFields"][] = "REG_KAKOU_DATE";
$tdatashouhin_batch[".exportFields"][] = "REG_PACKINGS";
$tdatashouhin_batch[".exportFields"][] = "DT_PACKING_DATE";
$tdatashouhin_batch[".exportFields"][] = "REG_AUTHOR";
$tdatashouhin_batch[".exportFields"][] = "DT_UP_DATE";
$tdatashouhin_batch[".exportFields"][] = "REG_EXHIBITOR";
$tdatashouhin_batch[".exportFields"][] = "Exhibition_Date";
$tdatashouhin_batch[".exportFields"][] = "status";
$tdatashouhin_batch[".exportFields"][] = "status1";
$tdatashouhin_batch[".exportFields"][] = "location";
$tdatashouhin_batch[".exportFields"][] = "chohyo_id";
$tdatashouhin_batch[".exportFields"][] = "Eoc_trader_id_for_buy";
$tdatashouhin_batch[".exportFields"][] = "Eoc_trader_id_for_sell";
$tdatashouhin_batch[".exportFields"][] = "destination_sold_out";
$tdatashouhin_batch[".exportFields"][] = "kanryou_henbi";

$tdatashouhin_batch[".importFields"] = array();
$tdatashouhin_batch[".importFields"][] = "product_id";
$tdatashouhin_batch[".importFields"][] = "yahoo_sinaban";
$tdatashouhin_batch[".importFields"][] = "nyuukin_price";
$tdatashouhin_batch[".importFields"][] = "comment";
$tdatashouhin_batch[".importFields"][] = "status";
$tdatashouhin_batch[".importFields"][] = "title";
$tdatashouhin_batch[".importFields"][] = "price";
$tdatashouhin_batch[".importFields"][] = "sales_price";
$tdatashouhin_batch[".importFields"][] = "memo";
$tdatashouhin_batch[".importFields"][] = "location";
$tdatashouhin_batch[".importFields"][] = "chohyo_id";
$tdatashouhin_batch[".importFields"][] = "Remarks";
$tdatashouhin_batch[".importFields"][] = "product_num";
$tdatashouhin_batch[".importFields"][] = "category_id";
$tdatashouhin_batch[".importFields"][] = "sub_category_id1";
$tdatashouhin_batch[".importFields"][] = "satei_by";
$tdatashouhin_batch[".importFields"][] = "cost";
$tdatashouhin_batch[".importFields"][] = "identification_cost";
$tdatashouhin_batch[".importFields"][] = "other_cost";
$tdatashouhin_batch[".importFields"][] = "serial_number_for_storage";
$tdatashouhin_batch[".importFields"][] = "Eoc_trader_id_for_buy";
$tdatashouhin_batch[".importFields"][] = "Eoc_trader_id_for_sell";
$tdatashouhin_batch[".importFields"][] = "destination_sold_out";
$tdatashouhin_batch[".importFields"][] = "kanryou_henbi";

$tdatashouhin_batch[".printFields"] = array();
$tdatashouhin_batch[".printFields"][] = "product_id";
$tdatashouhin_batch[".printFields"][] = "yahoo_sinaban";
$tdatashouhin_batch[".printFields"][] = "product_num";
$tdatashouhin_batch[".printFields"][] = "serial_number_for_storage";
$tdatashouhin_batch[".printFields"][] = "category_id";
$tdatashouhin_batch[".printFields"][] = "sub_category_id1";
$tdatashouhin_batch[".printFields"][] = "title";
$tdatashouhin_batch[".printFields"][] = "price";
$tdatashouhin_batch[".printFields"][] = "cost";
$tdatashouhin_batch[".printFields"][] = "identification_cost";
$tdatashouhin_batch[".printFields"][] = "other_cost";
$tdatashouhin_batch[".printFields"][] = "sales_price";
$tdatashouhin_batch[".printFields"][] = "nyuukin_price";
$tdatashouhin_batch[".printFields"][] = "comment";
$tdatashouhin_batch[".printFields"][] = "memo";
$tdatashouhin_batch[".printFields"][] = "Remarks";
$tdatashouhin_batch[".printFields"][] = "satei_by";
$tdatashouhin_batch[".printFields"][] = "satei_hi";
$tdatashouhin_batch[".printFields"][] = "yahoo_saisun_sha";
$tdatashouhin_batch[".printFields"][] = "saisun_start";
$tdatashouhin_batch[".printFields"][] = "saisun_end";
$tdatashouhin_batch[".printFields"][] = "REG_PHOTOGRAPHER";
$tdatashouhin_batch[".printFields"][] = "REG_PHOTOGRAPHER_DATE";
$tdatashouhin_batch[".printFields"][] = "REG_KAKOU";
$tdatashouhin_batch[".printFields"][] = "REG_KAKOU_DATE";
$tdatashouhin_batch[".printFields"][] = "REG_PACKINGS";
$tdatashouhin_batch[".printFields"][] = "DT_PACKING_DATE";
$tdatashouhin_batch[".printFields"][] = "REG_AUTHOR";
$tdatashouhin_batch[".printFields"][] = "DT_UP_DATE";
$tdatashouhin_batch[".printFields"][] = "REG_EXHIBITOR";
$tdatashouhin_batch[".printFields"][] = "Exhibition_Date";
$tdatashouhin_batch[".printFields"][] = "status";
$tdatashouhin_batch[".printFields"][] = "status1";
$tdatashouhin_batch[".printFields"][] = "location";
$tdatashouhin_batch[".printFields"][] = "chohyo_id";
$tdatashouhin_batch[".printFields"][] = "Eoc_trader_id_for_buy";
$tdatashouhin_batch[".printFields"][] = "Eoc_trader_id_for_sell";
$tdatashouhin_batch[".printFields"][] = "destination_sold_out";
$tdatashouhin_batch[".printFields"][] = "kanryou_henbi";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "shouhin_batch";
	$fdata["Label"] = GetFieldLabel("shouhin_batch","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin_batch`.`id`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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








	$tdatashouhin_batch["id"] = $fdata;
//	product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "product_id";
	$fdata["GoodName"] = "product_id";
	$fdata["ownerTable"] = "shouhin_batch";
	$fdata["Label"] = GetFieldLabel("shouhin_batch","product_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "product_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin_batch`.`product_id`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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




	$tdatashouhin_batch["product_id"] = $fdata;
//	yahoo_sinaban
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "yahoo_sinaban";
	$fdata["GoodName"] = "yahoo_sinaban";
	$fdata["ownerTable"] = "shouhin_batch";
	$fdata["Label"] = GetFieldLabel("shouhin_batch","yahoo_sinaban");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "yahoo_sinaban";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin_batch`.`yahoo_sinaban`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashouhin_batch["yahoo_sinaban"] = $fdata;
//	nyuukin_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nyuukin_price";
	$fdata["GoodName"] = "nyuukin_price";
	$fdata["ownerTable"] = "shouhin_batch";
	$fdata["Label"] = GetFieldLabel("shouhin_batch","nyuukin_price");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "nyuukin_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin_batch`.`nyuukin_price`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashouhin_batch["nyuukin_price"] = $fdata;
//	comment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "comment";
	$fdata["GoodName"] = "comment";
	$fdata["ownerTable"] = "shouhin_batch";
	$fdata["Label"] = GetFieldLabel("shouhin_batch","comment");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "comment";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin_batch`.`comment`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatashouhin_batch["comment"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "shouhin_batch";
	$fdata["Label"] = GetFieldLabel("shouhin_batch","status");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin_batch`.`status`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatashouhin_batch["status"] = $fdata;
//	yahoo_saisun_sha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "yahoo_saisun_sha";
	$fdata["GoodName"] = "yahoo_saisun_sha";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin_batch","yahoo_saisun_sha");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "first_name";

	
	$edata["LookupOrderBy"] = "income_id";

	
	
	
	

	
	
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




	$tdatashouhin_batch["yahoo_saisun_sha"] = $fdata;
//	REG_PHOTOGRAPHER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "REG_PHOTOGRAPHER";
	$fdata["GoodName"] = "REG_PHOTOGRAPHER";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin_batch","REG_PHOTOGRAPHER");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatashouhin_batch["REG_PHOTOGRAPHER"] = $fdata;
//	REG_KAKOU
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "REG_KAKOU";
	$fdata["GoodName"] = "REG_KAKOU";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin_batch","REG_KAKOU");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatashouhin_batch["REG_KAKOU"] = $fdata;
//	REG_PACKINGS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "REG_PACKINGS";
	$fdata["GoodName"] = "REG_PACKINGS";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin_batch","REG_PACKINGS");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatashouhin_batch["REG_PACKINGS"] = $fdata;
//	REG_AUTHOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "REG_AUTHOR";
	$fdata["GoodName"] = "REG_AUTHOR";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin_batch","REG_AUTHOR");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatashouhin_batch["REG_AUTHOR"] = $fdata;
//	REG_EXHIBITOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "REG_EXHIBITOR";
	$fdata["GoodName"] = "REG_EXHIBITOR";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin_batch","REG_EXHIBITOR");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatashouhin_batch["REG_EXHIBITOR"] = $fdata;
//	status1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "status1";
	$fdata["GoodName"] = "status1";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin_batch","status1");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatashouhin_batch["status1"] = $fdata;
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "shouhin_batch";
	$fdata["Label"] = GetFieldLabel("shouhin_batch","title");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin_batch`.`title`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashouhin_batch["title"] = $fdata;
//	price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "price";
	$fdata["GoodName"] = "price";
	$fdata["ownerTable"] = "shouhin_batch";
	$fdata["Label"] = GetFieldLabel("shouhin_batch","price");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin_batch`.`price`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashouhin_batch["price"] = $fdata;
//	sales_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "sales_price";
	$fdata["GoodName"] = "sales_price";
	$fdata["ownerTable"] = "shouhin_batch";
	$fdata["Label"] = GetFieldLabel("shouhin_batch","sales_price");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sales_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin_batch`.`sales_price`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashouhin_batch["sales_price"] = $fdata;
//	memo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "memo";
	$fdata["GoodName"] = "memo";
	$fdata["ownerTable"] = "shouhin_batch";
	$fdata["Label"] = GetFieldLabel("shouhin_batch","memo");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "memo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin_batch`.`memo`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatashouhin_batch["memo"] = $fdata;
//	location
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "location";
	$fdata["GoodName"] = "location";
	$fdata["ownerTable"] = "shouhin_batch";
	$fdata["Label"] = GetFieldLabel("shouhin_batch","location");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "location";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin_batch`.`location`";

	
	
				$fdata["FieldPermissions"] = true;

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
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "1";
	$edata["LookupValues"][] = "2";
	$edata["LookupValues"][] = "3";

	
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




	$tdatashouhin_batch["location"] = $fdata;
//	chohyo_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "chohyo_id";
	$fdata["GoodName"] = "chohyo_id";
	$fdata["ownerTable"] = "shouhin_batch";
	$fdata["Label"] = GetFieldLabel("shouhin_batch","chohyo_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "chohyo_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin_batch`.`chohyo_id`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashouhin_batch["chohyo_id"] = $fdata;
//	Remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Remarks";
	$fdata["GoodName"] = "Remarks";
	$fdata["ownerTable"] = "shouhin_batch";
	$fdata["Label"] = GetFieldLabel("shouhin_batch","Remarks");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Remarks";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin_batch`.`Remarks`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatashouhin_batch["Remarks"] = $fdata;
//	saisun_start
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "saisun_start";
	$fdata["GoodName"] = "saisun_start";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin_batch","saisun_start");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatashouhin_batch["saisun_start"] = $fdata;
//	saisun_end
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "saisun_end";
	$fdata["GoodName"] = "saisun_end";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin_batch","saisun_end");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatashouhin_batch["saisun_end"] = $fdata;
//	satei_hi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "satei_hi";
	$fdata["GoodName"] = "satei_hi";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin_batch","satei_hi");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatashouhin_batch["satei_hi"] = $fdata;
//	DT_UP_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "DT_UP_DATE";
	$fdata["GoodName"] = "DT_UP_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin_batch","DT_UP_DATE");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatashouhin_batch["DT_UP_DATE"] = $fdata;
//	REG_PHOTOGRAPHER_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "REG_PHOTOGRAPHER_DATE";
	$fdata["GoodName"] = "REG_PHOTOGRAPHER_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin_batch","REG_PHOTOGRAPHER_DATE");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatashouhin_batch["REG_PHOTOGRAPHER_DATE"] = $fdata;
//	REG_KAKOU_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "REG_KAKOU_DATE";
	$fdata["GoodName"] = "REG_KAKOU_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin_batch","REG_KAKOU_DATE");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatashouhin_batch["REG_KAKOU_DATE"] = $fdata;
//	DT_PACKING_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "DT_PACKING_DATE";
	$fdata["GoodName"] = "DT_PACKING_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin_batch","DT_PACKING_DATE");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatashouhin_batch["DT_PACKING_DATE"] = $fdata;
//	Exhibition_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "Exhibition_Date";
	$fdata["GoodName"] = "Exhibition_Date";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin_batch","Exhibition_Date");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatashouhin_batch["Exhibition_Date"] = $fdata;
//	product_num
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "product_num";
	$fdata["GoodName"] = "product_num";
	$fdata["ownerTable"] = "shouhin_batch";
	$fdata["Label"] = GetFieldLabel("shouhin_batch","product_num");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "product_num";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin_batch`.`product_num`";

	
	
				$fdata["FieldPermissions"] = true;

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
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
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




	$tdatashouhin_batch["product_num"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "shouhin_batch";
	$fdata["Label"] = GetFieldLabel("shouhin_batch","category_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "category_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin_batch`.`category_id`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatashouhin_batch["category_id"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "shouhin_batch";
	$fdata["Label"] = GetFieldLabel("shouhin_batch","sub_category_id1");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sub_category_id1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin_batch`.`sub_category_id1`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatashouhin_batch["sub_category_id1"] = $fdata;
//	satei_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "satei_by";
	$fdata["GoodName"] = "satei_by";
	$fdata["ownerTable"] = "shouhin_batch";
	$fdata["Label"] = GetFieldLabel("shouhin_batch","satei_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "satei_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin_batch`.`satei_by`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatashouhin_batch["satei_by"] = $fdata;
//	cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "cost";
	$fdata["GoodName"] = "cost";
	$fdata["ownerTable"] = "shouhin_batch";
	$fdata["Label"] = GetFieldLabel("shouhin_batch","cost");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "cost";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin_batch`.`cost`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashouhin_batch["cost"] = $fdata;
//	identification_cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "identification_cost";
	$fdata["GoodName"] = "identification_cost";
	$fdata["ownerTable"] = "shouhin_batch";
	$fdata["Label"] = GetFieldLabel("shouhin_batch","identification_cost");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "identification_cost";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin_batch`.`identification_cost`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashouhin_batch["identification_cost"] = $fdata;
//	other_cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "other_cost";
	$fdata["GoodName"] = "other_cost";
	$fdata["ownerTable"] = "shouhin_batch";
	$fdata["Label"] = GetFieldLabel("shouhin_batch","other_cost");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "other_cost";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin_batch`.`other_cost`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashouhin_batch["other_cost"] = $fdata;
//	serial_number_for_storage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "serial_number_for_storage";
	$fdata["GoodName"] = "serial_number_for_storage";
	$fdata["ownerTable"] = "shouhin_batch";
	$fdata["Label"] = GetFieldLabel("shouhin_batch","serial_number_for_storage");
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
	$fdata["FullName"] = "`shouhin_batch`.`serial_number_for_storage`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashouhin_batch["serial_number_for_storage"] = $fdata;
//	Eoc_trader_id_for_buy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "Eoc_trader_id_for_buy";
	$fdata["GoodName"] = "Eoc_trader_id_for_buy";
	$fdata["ownerTable"] = "shouhin_batch";
	$fdata["Label"] = GetFieldLabel("shouhin_batch","Eoc_trader_id_for_buy");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Eoc_trader_id_for_buy";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin_batch`.`Eoc_trader_id_for_buy`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashouhin_batch["Eoc_trader_id_for_buy"] = $fdata;
//	Eoc_trader_id_for_sell
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "Eoc_trader_id_for_sell";
	$fdata["GoodName"] = "Eoc_trader_id_for_sell";
	$fdata["ownerTable"] = "shouhin_batch";
	$fdata["Label"] = GetFieldLabel("shouhin_batch","Eoc_trader_id_for_sell");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Eoc_trader_id_for_sell";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin_batch`.`Eoc_trader_id_for_sell`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashouhin_batch["Eoc_trader_id_for_sell"] = $fdata;
//	destination_sold_out
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "destination_sold_out";
	$fdata["GoodName"] = "destination_sold_out";
	$fdata["ownerTable"] = "shouhin_batch";
	$fdata["Label"] = GetFieldLabel("shouhin_batch","destination_sold_out");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "destination_sold_out";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin_batch`.`destination_sold_out`";

	
	
				$fdata["FieldPermissions"] = true;

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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatashouhin_batch["destination_sold_out"] = $fdata;
//	kanryou_henbi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "kanryou_henbi";
	$fdata["GoodName"] = "kanryou_henbi";
	$fdata["ownerTable"] = "shouhin_batch";
	$fdata["Label"] = GetFieldLabel("shouhin_batch","kanryou_henbi");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "kanryou_henbi";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin_batch`.`kanryou_henbi`";

	
	
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

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 5;
	$edata["LastYearFactor"] = 5;

	
	
	
		$edata["controlWidth"] = 200;

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




	$tdatashouhin_batch["kanryou_henbi"] = $fdata;


$tables_data["shouhin_batch"]=&$tdatashouhin_batch;
$field_labels["shouhin_batch"] = &$fieldLabelsshouhin_batch;
$fieldToolTips["shouhin_batch"] = &$fieldToolTipsshouhin_batch;
$placeHolders["shouhin_batch"] = &$placeHoldersshouhin_batch;
$page_titles["shouhin_batch"] = &$pageTitlesshouhin_batch;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["shouhin_batch"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["shouhin_batch"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_shouhin_batch()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`shouhin_batch`.`id`,  `shouhin_batch`.`product_id`,  `shouhin_batch`.`yahoo_sinaban`,  `shouhin_batch`.`nyuukin_price`,  `shouhin_batch`.`comment`,  `shouhin_batch`.`status`,  `shouhin`.`yahoo_saisun_sha`,  `shouhin`.`REG_PHOTOGRAPHER`,  `shouhin`.`REG_KAKOU`,  `shouhin`.`REG_PACKINGS`,  `shouhin`.`REG_AUTHOR`,  `shouhin`.`REG_EXHIBITOR`,  `shouhin`.`status` AS `status1`,  `shouhin_batch`.`title`,  `shouhin_batch`.`price`,  `shouhin_batch`.`sales_price`,  `shouhin_batch`.`memo`,  `shouhin_batch`.`location`,  `shouhin_batch`.`chohyo_id`,  `shouhin_batch`.`Remarks`,  `shouhin`.`saisun_start`,  `shouhin`.`saisun_end`,  `shouhin`.`satei_hi`,  `shouhin`.`DT_UP_DATE`,  `shouhin`.`REG_PHOTOGRAPHER_DATE`,  `shouhin`.`REG_KAKOU_DATE`,  `shouhin`.`DT_PACKING_DATE`,  `shouhin`.`Exhibition_Date`,  `shouhin_batch`.`product_num`,  `shouhin_batch`.`category_id`,  `shouhin_batch`.`sub_category_id1`,  `shouhin_batch`.`satei_by`,  `shouhin_batch`.`cost`,  `shouhin_batch`.`identification_cost`,  `shouhin_batch`.`other_cost`,  `shouhin_batch`.`serial_number_for_storage`,  `shouhin_batch`.`Eoc_trader_id_for_buy`,  `shouhin_batch`.`Eoc_trader_id_for_sell`,  `shouhin_batch`.`destination_sold_out`,  `shouhin_batch`.`kanryou_henbi`";
$proto0["m_strFrom"] = "FROM `shouhin_batch`  LEFT OUTER JOIN `shouhin` ON `shouhin_batch`.`product_id` = `shouhin`.`product_id`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `shouhin_batch`.`id`";
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
	"m_strTable" => "shouhin_batch",
	"m_srcTableName" => "shouhin_batch"
));

$proto6["m_sql"] = "`shouhin_batch`.`id`";
$proto6["m_srcTableName"] = "shouhin_batch";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "shouhin_batch",
	"m_srcTableName" => "shouhin_batch"
));

$proto8["m_sql"] = "`shouhin_batch`.`product_id`";
$proto8["m_srcTableName"] = "shouhin_batch";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sinaban",
	"m_strTable" => "shouhin_batch",
	"m_srcTableName" => "shouhin_batch"
));

$proto10["m_sql"] = "`shouhin_batch`.`yahoo_sinaban`";
$proto10["m_srcTableName"] = "shouhin_batch";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "nyuukin_price",
	"m_strTable" => "shouhin_batch",
	"m_srcTableName" => "shouhin_batch"
));

$proto12["m_sql"] = "`shouhin_batch`.`nyuukin_price`";
$proto12["m_srcTableName"] = "shouhin_batch";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "comment",
	"m_strTable" => "shouhin_batch",
	"m_srcTableName" => "shouhin_batch"
));

$proto14["m_sql"] = "`shouhin_batch`.`comment`";
$proto14["m_srcTableName"] = "shouhin_batch";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin_batch",
	"m_srcTableName" => "shouhin_batch"
));

$proto16["m_sql"] = "`shouhin_batch`.`status`";
$proto16["m_srcTableName"] = "shouhin_batch";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_saisun_sha",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin_batch"
));

$proto18["m_sql"] = "`shouhin`.`yahoo_saisun_sha`";
$proto18["m_srcTableName"] = "shouhin_batch";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_PHOTOGRAPHER",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin_batch"
));

$proto20["m_sql"] = "`shouhin`.`REG_PHOTOGRAPHER`";
$proto20["m_srcTableName"] = "shouhin_batch";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_KAKOU",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin_batch"
));

$proto22["m_sql"] = "`shouhin`.`REG_KAKOU`";
$proto22["m_srcTableName"] = "shouhin_batch";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_PACKINGS",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin_batch"
));

$proto24["m_sql"] = "`shouhin`.`REG_PACKINGS`";
$proto24["m_srcTableName"] = "shouhin_batch";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_AUTHOR",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin_batch"
));

$proto26["m_sql"] = "`shouhin`.`REG_AUTHOR`";
$proto26["m_srcTableName"] = "shouhin_batch";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_EXHIBITOR",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin_batch"
));

$proto28["m_sql"] = "`shouhin`.`REG_EXHIBITOR`";
$proto28["m_srcTableName"] = "shouhin_batch";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin_batch"
));

$proto30["m_sql"] = "`shouhin`.`status`";
$proto30["m_srcTableName"] = "shouhin_batch";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "status1";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "shouhin_batch",
	"m_srcTableName" => "shouhin_batch"
));

$proto32["m_sql"] = "`shouhin_batch`.`title`";
$proto32["m_srcTableName"] = "shouhin_batch";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "price",
	"m_strTable" => "shouhin_batch",
	"m_srcTableName" => "shouhin_batch"
));

$proto34["m_sql"] = "`shouhin_batch`.`price`";
$proto34["m_srcTableName"] = "shouhin_batch";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_price",
	"m_strTable" => "shouhin_batch",
	"m_srcTableName" => "shouhin_batch"
));

$proto36["m_sql"] = "`shouhin_batch`.`sales_price`";
$proto36["m_srcTableName"] = "shouhin_batch";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "memo",
	"m_strTable" => "shouhin_batch",
	"m_srcTableName" => "shouhin_batch"
));

$proto38["m_sql"] = "`shouhin_batch`.`memo`";
$proto38["m_srcTableName"] = "shouhin_batch";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "location",
	"m_strTable" => "shouhin_batch",
	"m_srcTableName" => "shouhin_batch"
));

$proto40["m_sql"] = "`shouhin_batch`.`location`";
$proto40["m_srcTableName"] = "shouhin_batch";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "chohyo_id",
	"m_strTable" => "shouhin_batch",
	"m_srcTableName" => "shouhin_batch"
));

$proto42["m_sql"] = "`shouhin_batch`.`chohyo_id`";
$proto42["m_srcTableName"] = "shouhin_batch";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "Remarks",
	"m_strTable" => "shouhin_batch",
	"m_srcTableName" => "shouhin_batch"
));

$proto44["m_sql"] = "`shouhin_batch`.`Remarks`";
$proto44["m_srcTableName"] = "shouhin_batch";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "saisun_start",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin_batch"
));

$proto46["m_sql"] = "`shouhin`.`saisun_start`";
$proto46["m_srcTableName"] = "shouhin_batch";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "saisun_end",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin_batch"
));

$proto48["m_sql"] = "`shouhin`.`saisun_end`";
$proto48["m_srcTableName"] = "shouhin_batch";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_hi",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin_batch"
));

$proto50["m_sql"] = "`shouhin`.`satei_hi`";
$proto50["m_srcTableName"] = "shouhin_batch";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "DT_UP_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin_batch"
));

$proto52["m_sql"] = "`shouhin`.`DT_UP_DATE`";
$proto52["m_srcTableName"] = "shouhin_batch";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_PHOTOGRAPHER_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin_batch"
));

$proto54["m_sql"] = "`shouhin`.`REG_PHOTOGRAPHER_DATE`";
$proto54["m_srcTableName"] = "shouhin_batch";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_KAKOU_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin_batch"
));

$proto56["m_sql"] = "`shouhin`.`REG_KAKOU_DATE`";
$proto56["m_srcTableName"] = "shouhin_batch";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "DT_PACKING_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin_batch"
));

$proto58["m_sql"] = "`shouhin`.`DT_PACKING_DATE`";
$proto58["m_srcTableName"] = "shouhin_batch";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "Exhibition_Date",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin_batch"
));

$proto60["m_sql"] = "`shouhin`.`Exhibition_Date`";
$proto60["m_srcTableName"] = "shouhin_batch";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "product_num",
	"m_strTable" => "shouhin_batch",
	"m_srcTableName" => "shouhin_batch"
));

$proto62["m_sql"] = "`shouhin_batch`.`product_num`";
$proto62["m_srcTableName"] = "shouhin_batch";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "shouhin_batch",
	"m_srcTableName" => "shouhin_batch"
));

$proto64["m_sql"] = "`shouhin_batch`.`category_id`";
$proto64["m_srcTableName"] = "shouhin_batch";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "shouhin_batch",
	"m_srcTableName" => "shouhin_batch"
));

$proto66["m_sql"] = "`shouhin_batch`.`sub_category_id1`";
$proto66["m_srcTableName"] = "shouhin_batch";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_by",
	"m_strTable" => "shouhin_batch",
	"m_srcTableName" => "shouhin_batch"
));

$proto68["m_sql"] = "`shouhin_batch`.`satei_by`";
$proto68["m_srcTableName"] = "shouhin_batch";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "cost",
	"m_strTable" => "shouhin_batch",
	"m_srcTableName" => "shouhin_batch"
));

$proto70["m_sql"] = "`shouhin_batch`.`cost`";
$proto70["m_srcTableName"] = "shouhin_batch";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "identification_cost",
	"m_strTable" => "shouhin_batch",
	"m_srcTableName" => "shouhin_batch"
));

$proto72["m_sql"] = "`shouhin_batch`.`identification_cost`";
$proto72["m_srcTableName"] = "shouhin_batch";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "other_cost",
	"m_strTable" => "shouhin_batch",
	"m_srcTableName" => "shouhin_batch"
));

$proto74["m_sql"] = "`shouhin_batch`.`other_cost`";
$proto74["m_srcTableName"] = "shouhin_batch";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "serial_number_for_storage",
	"m_strTable" => "shouhin_batch",
	"m_srcTableName" => "shouhin_batch"
));

$proto76["m_sql"] = "`shouhin_batch`.`serial_number_for_storage`";
$proto76["m_srcTableName"] = "shouhin_batch";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "Eoc_trader_id_for_buy",
	"m_strTable" => "shouhin_batch",
	"m_srcTableName" => "shouhin_batch"
));

$proto78["m_sql"] = "`shouhin_batch`.`Eoc_trader_id_for_buy`";
$proto78["m_srcTableName"] = "shouhin_batch";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "Eoc_trader_id_for_sell",
	"m_strTable" => "shouhin_batch",
	"m_srcTableName" => "shouhin_batch"
));

$proto80["m_sql"] = "`shouhin_batch`.`Eoc_trader_id_for_sell`";
$proto80["m_srcTableName"] = "shouhin_batch";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "destination_sold_out",
	"m_strTable" => "shouhin_batch",
	"m_srcTableName" => "shouhin_batch"
));

$proto82["m_sql"] = "`shouhin_batch`.`destination_sold_out`";
$proto82["m_srcTableName"] = "shouhin_batch";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "kanryou_henbi",
	"m_strTable" => "shouhin_batch",
	"m_srcTableName" => "shouhin_batch"
));

$proto84["m_sql"] = "`shouhin_batch`.`kanryou_henbi`";
$proto84["m_srcTableName"] = "shouhin_batch";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto86=array();
$proto86["m_link"] = "SQLL_MAIN";
			$proto87=array();
$proto87["m_strName"] = "shouhin_batch";
$proto87["m_srcTableName"] = "shouhin_batch";
$proto87["m_columns"] = array();
$proto87["m_columns"][] = "id";
$proto87["m_columns"][] = "product_id";
$proto87["m_columns"][] = "yahoo_sinaban";
$proto87["m_columns"][] = "nyuukin_price";
$proto87["m_columns"][] = "comment";
$proto87["m_columns"][] = "memo";
$proto87["m_columns"][] = "status";
$proto87["m_columns"][] = "title";
$proto87["m_columns"][] = "price";
$proto87["m_columns"][] = "sales_price";
$proto87["m_columns"][] = "chohyo_id";
$proto87["m_columns"][] = "location";
$proto87["m_columns"][] = "Remarks";
$proto87["m_columns"][] = "product_num";
$proto87["m_columns"][] = "category_id";
$proto87["m_columns"][] = "sub_category_id1";
$proto87["m_columns"][] = "satei_by";
$proto87["m_columns"][] = "cost";
$proto87["m_columns"][] = "identification_cost";
$proto87["m_columns"][] = "other_cost";
$proto87["m_columns"][] = "serial_number_for_storage";
$proto87["m_columns"][] = "Eoc_trader_id_for_buy";
$proto87["m_columns"][] = "Eoc_trader_id_for_sell";
$proto87["m_columns"][] = "destination_sold_out";
$proto87["m_columns"][] = "kanryou_henbi";
$obj = new SQLTable($proto87);

$proto86["m_table"] = $obj;
$proto86["m_sql"] = "`shouhin_batch`";
$proto86["m_alias"] = "";
$proto86["m_srcTableName"] = "shouhin_batch";
$proto88=array();
$proto88["m_sql"] = "";
$proto88["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto88["m_column"]=$obj;
$proto88["m_contained"] = array();
$proto88["m_strCase"] = "";
$proto88["m_havingmode"] = false;
$proto88["m_inBrackets"] = false;
$proto88["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto88);

$proto86["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto86);

$proto0["m_fromlist"][]=$obj;
												$proto90=array();
$proto90["m_link"] = "SQLL_LEFTJOIN";
			$proto91=array();
$proto91["m_strName"] = "shouhin";
$proto91["m_srcTableName"] = "shouhin_batch";
$proto91["m_columns"] = array();
$proto91["m_columns"][] = "product_id";
$proto91["m_columns"][] = "category_id";
$proto91["m_columns"][] = "goods_title";
$proto91["m_columns"][] = "title";
$proto91["m_columns"][] = "sub_category_id1";
$proto91["m_columns"][] = "ecc_id";
$proto91["m_columns"][] = "price";
$proto91["m_columns"][] = "yahoo";
$proto91["m_columns"][] = "remark";
$proto91["m_columns"][] = "sales_price";
$proto91["m_columns"][] = "description";
$proto91["m_columns"][] = "status";
$proto91["m_columns"][] = "product_num";
$proto91["m_columns"][] = "updated_at";
$proto91["m_columns"][] = "yahoo_size";
$proto91["m_columns"][] = "yahoo_title";
$proto91["m_columns"][] = "yahoo_junle";
$proto91["m_columns"][] = "yahoo_sankou_uwadai";
$proto91["m_columns"][] = "yahoo_sozai";
$proto91["m_columns"][] = "yahoo_color";
$proto91["m_columns"][] = "yahoo_kataban";
$proto91["m_columns"][] = "yahoo_condition1";
$proto91["m_columns"][] = "yahoo_condition2";
$proto91["m_columns"][] = "yahoo_fuzokuhin";
$proto91["m_columns"][] = "yahoo_sinaban";
$proto91["m_columns"][] = "yahoo_saisun_sha";
$proto91["m_columns"][] = "yahoo_sex";
$proto91["m_columns"][] = "box_id";
$proto91["m_columns"][] = "nyuukin_price";
$proto91["m_columns"][] = "updated_by";
$proto91["m_columns"][] = "raku_title";
$proto91["m_columns"][] = "raku_hyoujisaki_category2";
$proto91["m_columns"][] = "raku_hyoujisaki_category";
$proto91["m_columns"][] = "raku_hyoujisaki_category3";
$proto91["m_columns"][] = "timesta";
$proto91["m_columns"][] = "saisun_start";
$proto91["m_columns"][] = "saisun_end";
$proto91["m_columns"][] = "label_output_flag";
$proto91["m_columns"][] = "season";
$proto91["m_columns"][] = "kanryou_henbi";
$proto91["m_columns"][] = "box_sort";
$proto91["m_columns"][] = "satei_by";
$proto91["m_columns"][] = "kaitori_by";
$proto91["m_columns"][] = "comment";
$proto91["m_columns"][] = "satei_hi";
$proto91["m_columns"][] = "kaitory_hi";
$proto91["m_columns"][] = "REG_PHOTOGRAPHER";
$proto91["m_columns"][] = "REG_AUTHOR";
$proto91["m_columns"][] = "REG_PACKINGS";
$proto91["m_columns"][] = "REG_KAKOU_DATE";
$proto91["m_columns"][] = "REG_KAKOU";
$proto91["m_columns"][] = "REG_EXHIBITOR";
$proto91["m_columns"][] = "REG_PHOTOGRAPHER_DATE";
$proto91["m_columns"][] = "DT_PACKING_DATE";
$proto91["m_columns"][] = "DT_UP_DATE";
$proto91["m_columns"][] = "AWAZU_DATE";
$proto91["m_columns"][] = "AWAZU_NIN";
$proto91["m_columns"][] = "sabun_date";
$proto91["m_columns"][] = "browseid";
$proto91["m_columns"][] = "browsenode";
$proto91["m_columns"][] = "gold_property";
$proto91["m_columns"][] = "ichiba_title";
$proto91["m_columns"][] = "Gram";
$proto91["m_columns"][] = "Parent_stone";
$proto91["m_columns"][] = "Aside_stone";
$proto91["m_columns"][] = "Appraiser";
$proto91["m_columns"][] = "Remarks";
$proto91["m_columns"][] = "Destination_selling";
$proto91["m_columns"][] = "Finish";
$proto91["m_columns"][] = "Discrimination";
$proto91["m_columns"][] = "accessories";
$proto91["m_columns"][] = "priority";
$proto91["m_columns"][] = "A_storage";
$proto91["m_columns"][] = "price_per_gram";
$proto91["m_columns"][] = "price_per_parent_stone";
$proto91["m_columns"][] = "price_per_aside_stone";
$proto91["m_columns"][] = "price_secret";
$proto91["m_columns"][] = "sales_price_secret";
$proto91["m_columns"][] = "eq";
$proto91["m_columns"][] = "en";
$proto91["m_columns"][] = "line";
$proto91["m_columns"][] = "item_name";
$proto91["m_columns"][] = "handle";
$proto91["m_columns"][] = "yahoo_color_id";
$proto91["m_columns"][] = "raku_hyoujisaki_category4";
$proto91["m_columns"][] = "raku_hyoujisaki_category5";
$proto91["m_columns"][] = "raku_dir_1";
$proto91["m_columns"][] = "raku_dir_2";
$proto91["m_columns"][] = "raku_dir_3";
$proto91["m_columns"][] = "raku_dir_4";
$proto91["m_columns"][] = "raku_dir_5";
$proto91["m_columns"][] = "raku_dir_result";
$proto91["m_columns"][] = "raku_tag_result";
$proto91["m_columns"][] = "serial_number";
$proto91["m_columns"][] = "Exhibition_Date";
$proto91["m_columns"][] = "search_keyword";
$proto91["m_columns"][] = "stamp";
$proto91["m_columns"][] = "motif";
$proto91["m_columns"][] = "Setting";
$proto91["m_columns"][] = "processing";
$proto91["m_columns"][] = "Sleeve_Length";
$proto91["m_columns"][] = "length";
$proto91["m_columns"][] = "Ring_size";
$proto91["m_columns"][] = "price_for_site";
$proto91["m_columns"][] = "yahoo_category_id";
$proto91["m_columns"][] = "Qty";
$proto91["m_columns"][] = "sales_period";
$proto91["m_columns"][] = "starting_price";
$proto91["m_columns"][] = "FLAG_NO_ARRIVAL";
$proto91["m_columns"][] = "amount_of_image";
$proto91["m_columns"][] = "csv";
$proto91["m_columns"][] = "return_output_flag";
$proto91["m_columns"][] = "wasabi_flag";
$proto91["m_columns"][] = "ws_import_date";
$proto91["m_columns"][] = "logo";
$proto91["m_columns"][] = "parts";
$proto91["m_columns"][] = "country_of_origin";
$proto91["m_columns"][] = "zipper";
$proto91["m_columns"][] = "guarantee";
$proto91["m_columns"][] = "errors";
$proto91["m_columns"][] = "designer";
$proto91["m_columns"][] = "hahakai";
$proto91["m_columns"][] = "effect";
$proto91["m_columns"][] = "shape";
$proto91["m_columns"][] = "cutting_style";
$proto91["m_columns"][] = "chain_type";
$proto91["m_columns"][] = "number_of_stones";
$proto91["m_columns"][] = "amount";
$proto91["m_columns"][] = "satei_error";
$proto91["m_columns"][] = "producing_area";
$proto91["m_columns"][] = "shape_supplement";
$proto91["m_columns"][] = "side_gem";
$proto91["m_columns"][] = "product_style";
$proto91["m_columns"][] = "collar_neck_line";
$proto91["m_columns"][] = "breast";
$proto91["m_columns"][] = "silhouette";
$proto91["m_columns"][] = "sleeve";
$proto91["m_columns"][] = "unit";
$proto91["m_columns"][] = "hall_mark";
$proto91["m_columns"][] = "plate";
$proto91["m_columns"][] = "toe";
$proto91["m_columns"][] = "heel";
$proto91["m_columns"][] = "cloth";
$proto91["m_columns"][] = "serial_number_for_storage";
$proto91["m_columns"][] = "official_url";
$proto91["m_columns"][] = "main_details";
$proto91["m_columns"][] = "notation_size";
$proto91["m_columns"][] = "shoe_size_jp";
$proto91["m_columns"][] = "Eoc_chigins2_id";
$proto91["m_columns"][] = "country_of_origin_name";
$proto91["m_columns"][] = "mailingkit_id";
$proto91["m_columns"][] = "DA_COMMENTSANDTOTAL";
$proto91["m_columns"][] = "DA_WEIGHT";
$proto91["m_columns"][] = "DA_PER_CARAT";
$proto91["m_columns"][] = "DA_SHAPE";
$proto91["m_columns"][] = "DA_SELFGRES";
$proto91["m_columns"][] = "DA_ORIGINALGRADEMLIKENED";
$proto91["m_columns"][] = "DA_SUGARCANE";
$proto91["m_columns"][] = "DA_RAPA";
$proto91["m_columns"][] = "DA_INTENSITY";
$proto91["m_columns"][] = "DA_OVERTONE";
$proto91["m_columns"][] = "DA_COLOR";
$proto91["m_columns"][] = "DA_CLARITY";
$proto91["m_columns"][] = "DA_CUT";
$proto91["m_columns"][] = "DA_POLISH";
$proto91["m_columns"][] = "DA_SYMMETRY";
$proto91["m_columns"][] = "DA_FLUO";
$proto91["m_columns"][] = "DA_COLOR_FLUO";
$proto91["m_columns"][] = "DA_WIDE";
$proto91["m_columns"][] = "DA_HIGH";
$proto91["m_columns"][] = "DA_DEPTH";
$proto91["m_columns"][] = "DA_APPRAISER";
$proto91["m_columns"][] = "DA_FRAPA";
$proto91["m_columns"][] = "DA_RATE";
$proto91["m_columns"][] = "DA_UNIT_PRICE_UNPLUG";
$proto91["m_columns"][] = "DA_YOURNAME";
$proto91["m_columns"][] = "DA_RAPAB";
$proto91["m_columns"][] = "DA_GROSSPROFIT";
$proto91["m_columns"][] = "DA_INTEREST_1";
$proto91["m_columns"][] = "DA_no";
$proto91["m_columns"][] = "kinsa_flag";
$proto91["m_columns"][] = "price_for_site_flag";
$proto91["m_columns"][] = "Eoc_takuhai_id";
$proto91["m_columns"][] = "Eoc_unfinished_id";
$proto91["m_columns"][] = "Eoc_chigins_unfinished_id";
$proto91["m_columns"][] = "chohyo_id";
$proto91["m_columns"][] = "location";
$proto91["m_columns"][] = "special_instructions_1";
$proto91["m_columns"][] = "special_instructions_2";
$proto91["m_columns"][] = "special_instructions_3";
$proto91["m_columns"][] = "chohyo_seihin_flag";
$proto91["m_columns"][] = "chohyo_dia_flag";
$proto91["m_columns"][] = "chohyo_type";
$proto91["m_columns"][] = "ichiyen_flag";
$proto91["m_columns"][] = "asuraku_fuka_flag";
$proto91["m_columns"][] = "parallel_import_flag";
$proto91["m_columns"][] = "meisai_number";
$proto91["m_columns"][] = "days_keep_price";
$proto91["m_columns"][] = "initial_included";
$proto91["m_columns"][] = "novelty";
$proto91["m_columns"][] = "tentou_label_output_flag";
$proto91["m_columns"][] = "itaku_flag";
$proto91["m_columns"][] = "including_catch";
$proto91["m_columns"][] = "ichiba_meeting_month";
$proto91["m_columns"][] = "ichiba_meeting_name";
$proto91["m_columns"][] = "ichiba_color";
$proto91["m_columns"][] = "ichiba_clarity";
$proto91["m_columns"][] = "ichiba_melee_gai";
$proto91["m_columns"][] = "ichiba_lot_pieces";
$proto91["m_columns"][] = "ichiba_image";
$proto91["m_columns"][] = "ichiba_img";
$proto91["m_columns"][] = "gold_check_id";
$proto91["m_columns"][] = "ichiba_exhibition_id";
$proto91["m_columns"][] = "ichiba_exhibition_sort";
$proto91["m_columns"][] = "cost";
$proto91["m_columns"][] = "auto_price_cut_prohibited";
$proto91["m_columns"][] = "event_price";
$proto91["m_columns"][] = "identification_cost";
$proto91["m_columns"][] = "other_cost";
$proto91["m_columns"][] = "stock_quantity";
$proto91["m_columns"][] = "Eoc_trader_id_for_buy";
$proto91["m_columns"][] = "Eoc_trader_id_for_sell";
$proto91["m_columns"][] = "multiplication_rate";
$proto91["m_columns"][] = "many_product_group_id";
$proto91["m_columns"][] = "trading_sort_id";
$proto91["m_columns"][] = "many_product_group_saiban";
$proto91["m_columns"][] = "purchase_category";
$proto91["m_columns"][] = "created_at";
$proto91["m_columns"][] = "created_by";
$proto91["m_columns"][] = "manual_input_price_per_gram";
$proto91["m_columns"][] = "satei_start";
$proto91["m_columns"][] = "self_DA_INTENSITY";
$proto91["m_columns"][] = "self_DA_OVERTONE";
$proto91["m_columns"][] = "self_DA_COLOR";
$proto91["m_columns"][] = "self_DA_CLARITY";
$proto91["m_columns"][] = "self_DA_CUT";
$proto91["m_columns"][] = "self_DA_POLISH";
$proto91["m_columns"][] = "self_DA_SYMMETRY";
$proto91["m_columns"][] = "self_DA_FLUO";
$proto91["m_columns"][] = "self_DA_COLOR_FLUO";
$proto91["m_columns"][] = "self_DA_FRAPA";
$proto91["m_columns"][] = "self_DA_RATE";
$proto91["m_columns"][] = "self_multiplication_rate";
$proto91["m_columns"][] = "is_seiyaku";
$proto91["m_columns"][] = "destination_sold_out";
$proto91["m_columns"][] = "mypage_update_prohibited";
$proto91["m_columns"][] = "gold_check_scan_id";
$proto91["m_columns"][] = "buy_campaign_data_id";
$proto91["m_columns"][] = "REG_PHOTOGRAPHER_DATE_start";
$proto91["m_columns"][] = "commission";
$proto91["m_columns"][] = "addtime_gold_check_id";
$proto91["m_columns"][] = "is_recovery";
$proto91["m_columns"][] = "sales_cost";
$proto91["m_columns"][] = "mst_business_partner_id";
$proto91["m_columns"][] = "DA_GROSSPROFIT_2";
$proto91["m_columns"][] = "DA_INTEREST_2";
$proto91["m_columns"][] = "minus_weight";
$proto91["m_columns"][] = "diameter_size";
$proto91["m_columns"][] = "metal_rate_date";
$obj = new SQLTable($proto91);

$proto90["m_table"] = $obj;
$proto90["m_sql"] = "LEFT OUTER JOIN `shouhin` ON `shouhin_batch`.`product_id` = `shouhin`.`product_id`";
$proto90["m_alias"] = "";
$proto90["m_srcTableName"] = "shouhin_batch";
$proto92=array();
$proto92["m_sql"] = "`shouhin_batch`.`product_id` = `shouhin`.`product_id`";
$proto92["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "shouhin_batch",
	"m_srcTableName" => "shouhin_batch"
));

$proto92["m_column"]=$obj;
$proto92["m_contained"] = array();
$proto92["m_strCase"] = "= `shouhin`.`product_id`";
$proto92["m_havingmode"] = false;
$proto92["m_inBrackets"] = false;
$proto92["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto92);

$proto90["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto90);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto94=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "shouhin_batch",
	"m_srcTableName" => "shouhin_batch"
));

$proto94["m_column"]=$obj;
$proto94["m_bAsc"] = 1;
$proto94["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto94);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="shouhin_batch";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_shouhin_batch = createSqlQuery_shouhin_batch();


	
		;

																																								

$tdatashouhin_batch[".sqlquery"] = $queryData_shouhin_batch;

include_once(getabspath("include/shouhin_batch_events.php"));
$tableEvents["shouhin_batch"] = new eventclass_shouhin_batch;
$tdatashouhin_batch[".hasEvents"] = true;

?>