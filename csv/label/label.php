<?
//CSV出力後の処理

//ラベルフラグ外す
$up_query = " UPDATE store_products SET label_output_flag=0 WHERE label_output_flag=1 ";
$up_sql = mysql_query('SET NAMES utf8');
$up_sql = mysql_query($up_query);
?>
