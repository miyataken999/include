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

//ログインID（英数字）を数字のidに変換
if($_SESSION["uid"] == ""){
	$sql = "select * from lounge_users where user_login = '%s'";
	$sql = sprintf($sql, $_SESSION["UserID"]);
	$rs = CustomQuery($sql);
	$data = db_fetch_array($rs);
	$_SESSION["uid"] = $data["user_id"];
	setcookie("uid",$_SESSION["uid"],time()+60*60*24,"/include");
	// var_dump($_COOKIE);
}else{
	setcookie("uid",$_SESSION["uid"],time()+60*60*24,"/include");
	// var_dump($_COOKIE);
}
// print "確認用".$_SESSION["uid"];

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
<link rel="stylesheet" href="/include/css/mypagestyle.css">

<?
//ページごとの読み込みファイル
$current_page_pass = $_SERVER["REQUEST_URI"];


//一覧ページの共通ファイル
if(stristr($current_page_pass, "_list.php")){
	if(stristr($current_page_pass, "/mypage/")){
		include_once $_SERVER["DOCUMENT_ROOT"]."/include/evacommon/mypage/list_page_script.php";
	}else{
		// include_once $_SERVER["DOCUMENT_ROOT"]."/include/evacommon/list_page_scripttest.php";
	}
?>
<link rel="stylesheet" href="/include/css/list_page.css">
<?
}elseif(stristr($current_page_pass, "_edit.php")){
	if(stristr($current_page_pass, "/mypage/")){
		include_once $_SERVER["DOCUMENT_ROOT"]."/include/evacommon/mypage/edit_page_script.php";
	}else{
		// include_once $_SERVER["DOCUMENT_ROOT"]."/include/evacommon/list_page_scripttest.php";
	}
}


//各ページファイル
if(stristr($current_page_pass, "mst_mail_template___parts_list.php")){
	include_once $_SERVER["DOCUMENT_ROOT"]."/include/MyPage/page_event/mst_mail_template___parts/list_page_script.php";
}
if(stristr($current_page_pass, "mst_mail_template___parts_categories_list.php")){
	include_once $_SERVER["DOCUMENT_ROOT"]."/include/MyPage/page_event/mst_mail_template___parts/list_page_script.php";
}
if(stristr($current_page_pass, "mst_automatic_reply_mail_list.php")){
	include_once $_SERVER["DOCUMENT_ROOT"]."/include/MyPage/page_event/mst_automatic_reply_mail/list_page_script.php";
}
if(stristr($current_page_pass, "users___estimate_list.php")){
	include_once $_SERVER["DOCUMENT_ROOT"]."/include/MyPage/page_event/users___estimate/list_page_script.php";
}



?>


