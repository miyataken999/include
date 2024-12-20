<?
mb_internal_encoding("utf8");
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";
$field_name = $_GET["field_name"];



if($field_name == "category_id"){
	$query = " SELECT category_id AS id , category_name AS name FROM store_categories ORDER BY category_name ";
}elseif($field_name == "sub_category_id1"){
	$query = " SELECT id , name , category_id FROM store_sub_categories ORDER BY name ";
}elseif($field_name == "st_yahoo_sex"){
	$query = " SELECT sex_id AS id , sex_name AS name FROM _sex ";
}elseif($field_name == "seach_j"){
	$query = " SELECT distinct seach_j AS name FROM mst_brand ORDER BY name ";
}elseif($field_name == "yahoo_junle"){
	$query = " SELECT id , name FROM mst_brand ORDER BY name  ";
}

$sql = mysql_query('SET NAMES utf8');
$sql = mysql_query($query);

?>
<option value="">選択してください。</option>
<?

while ($result = mysql_fetch_assoc($sql)) {
	if($field_name == "sub_category_id1"){
		$sql_sub = mysql_query('SET NAMES utf8');
		$sql_sub = mysql_query(" SELECT category_name FROM store_categories WHERE category_id = ".$result["category_id"]);
		$result_sub = mysql_fetch_assoc($sql_sub);
?>
<option value="<?=$result['id'];?>"><?=$result["name"];?> 大カテ：<?=$result_sub["category_name"];?></option>
<?
	}elseif($field_name == "seach_j"){
		//なにもしない
	}else{
?>
<option value="<?=$result['id'];?>"><?=$result["name"];?></option>
<?
	}
}


if($field_name == "seach_j"){
?>
<option value="ア行">ア行</option>
<option value="カ行">カ行</option>
<option value="サ行">サ行</option>
<option value="タ行">タ行</option>
<option value="ナ行">ナ行</option>
<option value="ハ行">ハ行</option>
<option value="マ行">マ行</option>
<option value="ヤ行">ヤ行</option>
<option value="ラ行">ラ行</option>
<option value="ワ行">ワ行</option>
<option value="その他">その他</option>
<?
}
?>
