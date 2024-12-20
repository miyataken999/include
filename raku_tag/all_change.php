<?
//データベース接続
mb_internal_encoding("utf8");
ini_set( 'display_errors', 1 );
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";



// $id = $_GET["change_id"];
$dir_id = 110934;

//選択されたidの設定値を取得
// $sql = mysql_query('SET NAMES utf8');
// $sql = "( SELECT name_1 , value_1 , conjunction_2 , name_2 , value_2 , conjunction_3 , name_3 , value_3 , brand_junle FROM raku_tag_fashiongoods WHERE id = ".$id." LIMIT 1 )";

// $sql = mysql_query(" SELECT DISTINCT dir_id , tag_class , tag_id  FROM raku_tag_fashiongoods WHERE dir_id = ".$dir_id." LIMIT 10");
// $sql = mysql_query(" SELECT * FROM mst_raku_tag_test ");
// while ($sql_result = mysql_fetch_assoc($sql)) {
// }
// while ($sql_result = mysql_fetch_assoc($sql)) {
// 	echo "dir_id==========".$sql_result["dir_id"]."<br>";
// 	echo "tag_class==========".$sql_result["tag_class"]."<br>";
// 	echo "tag_id==========".$sql_result["tag_id"]."<br>";
// }
// $sql = mysql_query('SET NAMES utf8');
// $sql = mysql_query("CREATE TABLE mst_raku_tag_test AS SELECT DISTINCT tag_class , tag_name , tag_id  FROM raku_tag_fashiongoods WHERE dir_id = ".$dir_id);
// $sql_result = mysql_fetch_assoc($sql);

//次回作業
//設定値を基に、タグID基準で全てのデータを一括変更する処理
