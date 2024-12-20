<?
mb_internal_encoding("utf8");
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";


$this_name = $_GET["this_name"];
$this_val = $_GET["this_val"];
$this_brand = $_GET["this_brand"];
// echo " ".$this_name."\n";
// echo $this_val."\n";


if($this_name == "大カテゴリ"){
	$query = " SELECT category_name AS name FROM store_categories WHERE category_id = ".$this_val;
}elseif($this_name == "中カテゴリ"){
	$query = " SELECT name FROM store_sub_categories WHERE id = ".$this_val;
}elseif($this_name == "性別"){
	$query = " SELECT sex_name AS name FROM _sex WHERE sex_id = ".$this_val;
}elseif($this_name == "ブラジャン頭文字"){
	$no_query = "on";
}
if($this_brand != ""){
	$query = " SELECT name FROM mst_brand WHERE id = ".$this_brand;
	$sql = mysql_query('SET NAMES utf8');
	$sql = mysql_query($query);
	$result = mysql_fetch_assoc($sql);
	echo $result["name"];

}elseif($no_query != "on"){
	$sql = mysql_query('SET NAMES utf8');
	$sql = mysql_query($query);
	$result = mysql_fetch_assoc($sql);
	echo $result["name"];
}else{
	echo $this_val;
}



?>
