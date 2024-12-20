<?
// phpinfo();
//ログイン認証
include_once $_SERVER["DOCUMENT_ROOT"]."/include/login/login.php";



ini_set("display_errors",1);



//pdoのクラス
include_once $_SERVER["DOCUMENT_ROOT"]."/include/classes/pdo_connect.php";

require_once('qdmail/qdmail.php');
require_once('qdmail/qdsmtp.php');

require_once('function.php');
require_once('./../../connection.php');
mysql_query("SET NAMES 'utf8'");








?>
