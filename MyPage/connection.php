<?php

//MySQL サーバー
$servername = "urlounge.co.jp";
//MySQL ユーザー
$username = "testssh";
//MySQL パスワード
$password = "testssh";
//MySQL  DB名
$dbname = "internet";


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



?>
