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
<option value="ア">ア</option>
<option value="イ">イ</option>
<option value="ウ">ウ</option>
<option value="エ">エ</option>
<option value="オ">オ</option>
<option value="カ">カ</option>
<option value="キ">キ</option>
<option value="ク">ク</option>
<option value="ケ">ケ</option>
<option value="コ">コ</option>

<option value="サ">サ</option>
<option value="シ">シ</option>
<option value="ス">ス</option>
<option value="セ">セ</option>
<option value="ソ">ソ</option>
<option value="タ">タ</option>
<option value="チ">チ</option>
<option value="ツ">ツ</option>
<option value="テ">テ</option>
<option value="ト">ト</option>
<option value="ナ">ナ</option>
<option value="ニ">ニ</option>
<option value="ヌ">ヌ</option>
<option value="ネ">ネ</option>
<option value="ノ">ノ</option>
<option value="ハ">ハ</option>
<option value="ヒ">ヒ</option>
<option value="フ">フ</option>
<option value="ヘ">ヘ</option>
<option value="ホ">ホ</option>
<option value="マ">マ</option>
<option value="ミ">ミ</option>
<option value="ム">ム</option>
<option value="メ">メ</option>
<option value="モ">モ</option>
<option value="ヤ">ヤ</option>
<option value="ユ">ユ</option>
<option value="ヨ">ヨ</option>
<option value="ラ">ラ</option>
<option value="リ">リ</option>
<option value="ル">ル</option>
<option value="レ">レ</option>
<option value="ロ">ロ</option>
<option value="ワ">ワ</option>
<?
}
?>
