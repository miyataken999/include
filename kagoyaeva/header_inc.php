<?php
//print __DIR__;
//exit();
//include('/var/www/html/shop/lib/simplehtmldom/simple_html_dom.php');
//print "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
//////////////////////////////////

$_SESSION["_record_list_count"]=0;
// var_dump(session_get_cookie_params());

//ログインID（英数字）を数字のidに変換
if($_SESSION["uid"] == ""){
	$sql = "select * from users where username = '%s'";
	$sql = sprintf($sql, $_SESSION["UserID"]);
	$rs = CustomQuery($sql);
	$data = db_fetch_array($rs);
	$_SESSION["uid"] = $data["user_id"];
}
// print "確認用".$sql;
// print "確認用".$_SESSION["uid"];



//ページごとの読み込みファイル
$current_page_pass = $_SERVER["REQUEST_URI"];
if(!stristr($current_page_pass, "login.php")){


	//全ページ共通CSS
	?>
	<link rel="stylesheet" href="/include/css/shop5style.css">
	<?

	//全ヘッダー
	include_once $_SERVER["DOCUMENT_ROOT"]."/include/evacommon/header.php";

}

//一覧ページの共通ファイル
if(stristr($current_page_pass, "_list.php")){
	if(stristr($current_page_pass, "/kagoyatest/")){
		include_once $_SERVER["DOCUMENT_ROOT"]."/include/kagoyaeva/list_page_scripttest.php";
	}else{
		include_once $_SERVER["DOCUMENT_ROOT"]."/include/kagoyaeva/list_page_script.php";
	}

}



if(stristr($current_page_pass, "mst_brakai_column_list_list.php")){
	//コラム一覧
	include_once $_SERVER["DOCUMENT_ROOT"]."/include/kagoyaeva/page_event/mst_brakai_column_list/list_page_script.php";
}elseif(stristr($current_page_pass, "mst_brakai_column_data_list.php")){
	//コラム詳細
	include_once $_SERVER["DOCUMENT_ROOT"]."/include/kagoyaeva/page_event/mst_brakai_column_data/list_page_script.php";
}elseif(stristr($current_page_pass, "mst_sell_campaign_list.php")){
	//販売キャンペーン
	//コラム詳細
	include_once $_SERVER["DOCUMENT_ROOT"]."/include/kagoyaeva/page_event/mst_sell_campaign_list/list_page_script.php";
} elseif (stristr($current_page_pass, "interview")) {
	include_once $_SERVER["DOCUMENT_ROOT"] . "/include/kagoyaeva/page_event/interview/list_page_script.php";
}

if(stristr($current_page_pass, "/mst_buy_campaign_target_list.php?masterkey")){
	include_once $_SERVER["DOCUMENT_ROOT"]."/include/kagoyaeva/page_event/mst_buy_campaign_target_list/master.php";
}

//zendesk系
if (stristr($current_page_pass, "zendesk")) {
	if (stristr($current_page_pass, "_list.php")) {
		include_once $_SERVER["DOCUMENT_ROOT"] . "/include/kagoyaeva/page_event/zendesk/list_page_script.php";
	}
}
