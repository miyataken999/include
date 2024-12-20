<pre>
<?
// session_start();
// var_dump(session_get_cookie_params());
// var_dump(session_id());
// var_dump($_SESSION);
// var_dump($_COOKIE);
?>
</pre>

<?php
//print __DIR__;
//exit();
//include('/var/www/html/shop/lib/simplehtmldom/simple_html_dom.php');
//print "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
//////////////////////////////////

$_SESSION["_record_list_count"]=0;
// var_dump(session_get_cookie_params());

$current_page_pass = $_SERVER["REQUEST_URI"];
if(!stristr($current_page_pass, "/mypage_eva/")){
	//ログインID（英数字）を数字のidに変換
	if($_SESSION["uid"] == ""){
		if($_SESSION["UserID"]!=""){
			$sql = "select * from users where user_login = '%s'";
			$sql = sprintf($sql, $_SESSION["UserID"]);
			$rs = CustomQuery($sql);
			$data = db_fetch_array($rs);
			$_SESSION["uid"] = $data["user_id"];
			setcookie("uid",$_SESSION["uid"],time()+60*60*24,"/");
			// var_dump($_COOKIE);
		}
	}else{
			setcookie("uid",$_SESSION["uid"],time()+60*60*24,"/");
			// var_dump($_COOKIE);
	}
		// print "確認用".$_SESSION["uid"];

}


/******************************************************************
FTP情報をセッションにいれる
*******************************************************************/

if($_SESSION["ftp"] == ""){
$ftp = array(
        'ftp_server' => 'ftp.rakuten.ne.jp',
        'ftp_user_name' => 'rfstore',
        'ftp_user_pass' => 'Rgoiru75'
        );
	$_SESSION["ftp"] = $ftp;
}


//全ページ共通CSS
?>
<link rel="stylesheet" href="/include/css/shop5style.css">

<?
//ページごとの読み込みファイル
$current_page_pass = $_SERVER["REQUEST_URI"];


//一覧ページの共通ファイル
if(stristr($current_page_pass, "_list.php")){
	if(stristr($current_page_pass, "/shop5test/")){
		include_once $_SERVER["DOCUMENT_ROOT"]."/include/evacommon/list_page_scripttesttest.php";
	}else{
		include_once $_SERVER["DOCUMENT_ROOT"]."/include/evacommon/list_page_script.php";
	}
	//shop4のみ、メニュー作り替え
	if(stristr($current_page_pass, "shop4")){
		include_once $_SERVER["DOCUMENT_ROOT"]."/include/evacommon/shop4_menu.php";
	}


?>
<link rel="stylesheet" href="/include/css/list_page.css">
<?
}

//顧客一覧
if((stristr($current_page_pass, "Eoc_list.php")) OR (stristr($current_page_pass, "Eoctest_list.php"))){
	include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/eoc/list_page_script.php";
}
if((stristr($current_page_pass, "Eoc_edit.php")) OR (stristr($current_page_pass, "Eoctest_edit.php"))){
	include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/eoc/edit_page_script.php";
}
if(stristr($current_page_pass, "Eoc_speed_list.php")){
	include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/Eoc_speed/list_page_script.php";
}

//宅配キット確認画面
if(stristr($current_page_pass, "kit_confirm_list.php")){
	include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/kit_confirm/list_page_script.php";
}
//宅配申込一覧
if(stristr($current_page_pass, "Eoc_takuhai_list.php")){
	include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/eoc_takuhai/list_page_script.php";
}
//採寸一覧
if(stristr($current_page_pass, "saisun_list.php")){
	include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/saisun/list_page_script.php";
}
if(stristr($current_page_pass, "saisun_edit.php")){
	include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/saisun/edit_page_script.php";
}
//査定物一覧
if(stristr($current_page_pass, "mastertable=Eoc")){
	include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/eoc_master/list_page_script.php";
}
//業務取引の中の査物
if(stristr($current_page_pass, "mastertable=Eoc_trader")){
	include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/Eoc_trader_master/list_page_script.php";
}
//ログ一覧
if(stristr($current_page_pass, "evav62122_audit_list.php")){
	include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/evav62122_audit/list_page_script.php";
}
//中カテマスタ
if(stristr($current_page_pass, "store_sub_categories_list.php")){
	include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/store_sub_categories/list_page_script.php";
}
//大カテマスタ
if(stristr($current_page_pass, "store_categories_list.php")){
	include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/store_categories/list_page_script.php";
}
//楽ジャンマスタ
if(stristr($current_page_pass, "mst_rakuten_category_list.php")){
	include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/mst_rakuten_category/list_page_script.php";
}
//出品情報
if(stristr($current_page_pass, "auctions_list.php")){
	include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/auctions/list_page_script.php";
}
//ブランド一覧
if(stristr($current_page_pass, "mst_brand_list.php")){
	include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/mst_brand/list_page_script.php";
}
//ライン
if(stristr($current_page_pass, "mst_item_list.php")){
	include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/mst_item/list_page_script.php";
}
//アイテム名
if(stristr($current_page_pass, "mst_item_name_list.php")){
	include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/mst_item_name/list_page_script.php";
}
//NEW 金査
if(stristr($current_page_pass, "kin_satei_list.php")){
	if(!stristr($current_page_pass, "Eoc_trader")){
		if(stristr($current_page_pass, "/shop5/")){
			include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/kin_satei/list_page_script.php";
		}else{
			include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/kin_satei/list_page_scripttest.php";
		}
	}
}
//旧 D在
if(stristr($current_page_pass, "PMT_EV001_list.php")){
	include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/PMT_EV001/list_page_script.php";
}
//NEW D在
if(stristr($current_page_pass, "dia_list.php")){
	include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/dia/list_page_script.php";
}
//商品一覧
if(stristr($current_page_pass, "shouhin_list.php")){
	include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/shouhin/list_page_script.php";
}
//商品バッチページ
if(stristr($current_page_pass, "shouhin_batch_list.php")){
	include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/shouhin_batch/list_page_script.php";
}
//入庫待ち一覧
if(stristr($current_page_pass, "nyuko_list.php")){
	include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/nyuko/list_page_script.php";
}

//Eoc_refining一覧
if(stristr($current_page_pass, "Eoc_refining_list.php")){
	include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/Eoc_refining/list_page_script.php";
}

//edit,addページの共通ファイル
if((stristr($current_page_pass, "_edit.php")) OR (stristr($current_page_pass, "_add.php"))){
	include_once $_SERVER["DOCUMENT_ROOT"]."/include/evacommon/edit_page_script.php";
?>
<link rel="stylesheet" href="/include/css/edit_page.css">
<?
}


if(stristr($current_page_pass, "/ichiba_exhibition_list.php")){
	include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/ichiba_exhibition/list_page_script.php";
}

if((stristr($current_page_pass, "/Eoc_add.php")) OR (stristr($current_page_pass, "/Eoc_edit.php"))){
	include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/eoc/add_edit_script.php";
}

if(stristr($current_page_pass, "/Eoc_catch_list.php")){
	include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/eoc_catch/list_page_script.php";
}
if((stristr($current_page_pass, "/Eoc_catch_add.php")) OR (stristr($current_page_pass, "/Eoc_catch_edit.php"))){
	if(!stristr($current_page_pass, "/shop5/")){
		include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/eoc_catch/add_edit_scripttest.php";
	}else{
		include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/eoc_catch/add_edit_script.php";
	}
}

if(
	(stristr($current_page_pass, "/satei_list.php?masterkey"))
 OR (stristr($current_page_pass, "/Eoc_chigins2_list.php?masterkey"))
 OR (stristr($current_page_pass, "/kin_satei_list.php?masterkey"))
 OR (stristr($current_page_pass, "/satei_of_jewelry_list.php?masterkey"))
 OR (stristr($current_page_pass, "/satei_of_brand1_list.php?masterkey"))
 )
{
	// if(!stristr($current_page_pass, "Eoc_trader")){
		include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/eoc/master.php";
	// }
}elseif(
	(stristr($current_page_pass, "/satei_list.php"))
	OR (stristr($current_page_pass, "/satei_of_jewelry_list.php"))
	OR (stristr($current_page_pass, "/satei_of_brand1_list.php"))
	){
		if(!stristr($current_page_pass, "Eoc_trader")){
			include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/satei/list_page_script.php";
		}
}


if(stristr($current_page_pass, "Eoc_chigins2_list.php")){
	include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/Eoc_chigins2/list_page_script.php";
}


if(stristr($current_page_pass, "mail_data_tbl_template_list.php")){
	include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/mail_data_tbl/list_page_script.php";
}
if((stristr($current_page_pass, "mail_data_tbl_template_edit.php")) OR (stristr($current_page_pass, "mail_data_tbl_template_add.php"))){
	include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/mail_data_tbl/edit_page_script.php";
}


if(stristr($current_page_pass, "Eoc_transfer_confirm_list")){
	include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/Eoc_transfer_confirm/list_page_script.php";
}


if(stristr($current_page_pass, "vw_Eoc_mail_magazine_list")){
	include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/vw_Eoc_mail_magazine_list/list_page_script.php";
}

if(stristr($current_page_pass, "voice_sub_id_3_list")){
	include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/voice_sub_id_3/list_page_script.php";
}



//市場製品実績
if(stristr($current_page_pass, "market_product_performance_list.php")){
		include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/market_product_performance/list_page_script.php";
}

//地金商金性
if(stristr($current_page_pass, "mst_gold_of_bullion_merchants_list.php")){
		include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/mst_gold_of_bullion_merchants/list_page_script.php";
}

//地金チェック+アイテム
if((stristr($current_page_pass, "gold_check_item_list.php")) OR (stristr($current_page_pass, "gold_check_list.php"))){
		include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/gold_check_item/list_page_script.php";
}

//ラベル用商品一覧
if(stristr($current_page_pass, "shouhin_for_labels_list.php")){
	include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/shouhin_for_labels/list_page_script.php";
}

//shop4リダイレクト処理
if(stristr($current_page_pass, "mst_Discrimination_list.php")){
	if(stristr($current_page_pass, "/shop4/")){
		header("Location:https://rifa.life/shop5/mst_Discrimination_list.php");
	}
}

if( (stristr($current_page_pass, "chohyo")) AND (stristr($current_page_pass, "_list")) ){
	if(!stristr($current_page_pass, "/shop5test/")){
		include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/chohyo/list_page_script.php";
	}else{
		include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/chohyo/list_page_script_test.php";
	}
}
//査定物一覧
if(stristr($current_page_pass, "satei_of_jewelry_list.php")){
	include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/satei/list_page_script.php";
}

//市場製品実績一覧
if(stristr($current_page_pass, "market_product_performance_original_list.php")){
	include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/market_product_performance_original/list_page_script.php";
}



//査定項目条件
if(stristr($current_page_pass, "satei_items_rules_list.php")){
	include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/satei_items_rules/list_page_script.php";
}

//sorting_batch
if(stristr($current_page_pass, "sorting_batch_list.php")){
	include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/sorting_batch/list_page_script.php";
}


// 佐川集荷API一覧
if (stristr($current_page_pass, "sagawa_api_results_list.php")) {
	include_once $_SERVER["DOCUMENT_ROOT"] . "/include/page_event/sagawa_api_results/list_page_script.php";
}

// ロイヤルカスタマー
if (stristr($current_page_pass, "royal_customer_list.php")) {
	include_once $_SERVER["DOCUMENT_ROOT"] . "/include/page_event/royal_customer/list_page_script.php";
}
if (stristr($current_page_pass, "Eoc_royal_customers_list.php")) {
	include_once $_SERVER["DOCUMENT_ROOT"] . "/include/page_event/Eoc_royal_customers/list_page_script.php";
}

// freee
if (stristr($current_page_pass, "freee_deal_detail__memotag_list.php")) {
	include_once $_SERVER["DOCUMENT_ROOT"] . "/include/page_event/freee_deal_detail__memotag/list_page_script.php";
}
if (stristr($current_page_pass, "freee_deal_join_manual_journal__detail__memotag_list.php")) {
	include_once $_SERVER["DOCUMENT_ROOT"] . "/include/page_event/freee_deal_join_manual_journal__detail__memotag/list_page_script.php";
}

//admin
if(stristr($current_page_pass, "admin_users_list.php")){
	include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/admin_users/list_page_script.php";
}


?>
