<?php
//print __DIR__;
//exit();
//include('/var/www/html/shop/lib/simplehtmldom/simple_html_dom.php');
//print "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
//////////////////////////////////

$_SESSION["_record_list_count"]=0;
// var_dump(session_get_cookie_params());

//ログインID（英数字）を数字のidに変換
// if($_SESSION["uid"] == ""){
// 	$sql = "select * from users where username = '%s'";
// 	$sql = sprintf($sql, $_SESSION["UserID"]);
// 	$rs = CustomQuery($sql);
// 	$data = db_fetch_array($rs);
// 	$_SESSION["uid"] = $data["user_id"];
// }
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
	// include_once $_SERVER["DOCUMENT_ROOT"]."/include/evacommon/header.php";


	//一覧ページの共通ファイル
	if((stristr($current_page_pass, "_list.php")) OR (stristr($current_page_pass, "_chart.php"))){
		if(stristr($current_page_pass, "/graphtest/")){
			include_once $_SERVER["DOCUMENT_ROOT"]."/include/grapheva/list_page_scripttest.php";
		}else{
			include_once $_SERVER["DOCUMENT_ROOT"]."/include/grapheva/list_page_script.php";
		}

	}

}//endif login.php
