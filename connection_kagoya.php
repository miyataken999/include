<?php

//MySQL サーバー
// $servername = "o4042-854.kagoya.net";

$servername = "35.200.113.217";

//MySQL ユーザー
$username = "nishitani";
//MySQL パスワード
$password = "nishitani";
//MySQL  DB名
$dbname = "information_schema";


$link = mysql_connect($servername, $username, $password);
if (!$link) {
die('接続失敗です。'.mysql_error());
}else{
	// print('接続に成功しました。<br>');
}

$db_selected = mysql_select_db($dbname, $link);
if (!$db_selected){
die('データベース選択失敗です。'.mysql_error());
}else{
	// print('データベースを選択しました。<br>');
}

// mysql_set_charset('utf8');


//MySQL  DB名
$dbname = "internet";


$link_internet = mysql_connect($servername, $username, $password);
if (!$link_internet) {
die('接続失敗です。'.mysql_error());
}else{
	// print('接続に成功しました。<br>');
}

$db_selected_internet = mysql_select_db($dbname, $link_internet);
if (!$db_selected_internet){
die('データベース選択失敗です。'.mysql_error());
}else{
	// print('データベースを選択しました。<br>');
}


?>
