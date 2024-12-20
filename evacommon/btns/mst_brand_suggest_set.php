<?
mb_internal_encoding("utf8");
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";


$query = 'DELETE FROM mst_brand2';
$sql = mysql_query('SET NAMES utf8');
$sql = mysql_query($query);

$query = 'INSERT INTO mst_brand2 SELECT name,"",id,"" FROM mst_brand';
$sql = mysql_query('SET NAMES utf8');
$sql = mysql_query($query);

?>
ブランドサジェスト復活！
