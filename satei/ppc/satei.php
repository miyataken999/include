<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PPC明細</title>
	<link rel="stylesheet" href="">
</head>
<body>

<?
// header("content-type:text/csv; charset=utf-8;");
// header("content-type:text/html; charset=utf-8;");
mb_internal_encoding("utf-8");
// ini_set("display_errors",1);

//ログイン認証
include_once $_SERVER["DOCUMENT_ROOT"]."/include/login/login.php";

include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";


$query = "SELECT
satei_hi,
ecc_id,
category_id,
sub_category_id1,
raku_title,
title,
yahoo_junle,
price,
sales_price
FROM
shouhin
WHERE
satei_hi BETWEEN '2017-10-01 00:00:00'AND '2017-11-01 00:00:00' ORDER BY satei_hi
";
$sql = mysql_query('SET NAMES utf8');
$sql = mysql_query($query);
mysqli_error();


$field_name_array = array("satei_hi","ecc_id","category_id","sub_category_id1","raku_title","title","yahoo_junle","price","sales_price");
$csv_name = array("査定日","顧客id","大カテ","中カテ","楽天タイトル","タイトル","ブランド名","買取額","販売額");
$result_list = array($csv_name);
$count_field = count($field_name_array);
$result_array = array();

while ($res = mysql_fetch_assoc($sql)) {
  for ($field_i=0; $field_i < $count_field; $field_i++) {
    if($field_name_array[$field_i] == "category_id"){
      $a = $res["category_id"];
      $q = "SELECT category_name FROM store_categories WHERE category_id={$a}";
      $s = mysql_query('SET NAMES utf8');
      $s = mysql_query($q);
      $r = mysql_fetch_array($s);
      $res[$field_name_array[$field_i]] = $r["category_name"];
    }elseif($field_name_array[$field_i] == "sub_category_id1"){
      $a = $res["sub_category_id1"];
      $q = "SELECT name FROM store_sub_categories WHERE id={$a}";
      $s = mysql_query('SET NAMES utf8');
      $s = mysql_query($q);
      $r = mysql_fetch_array($s);
      $res[$field_name_array[$field_i]] = $r["name"];
    }



    $result_array[$field_i] = $res[$field_name_array[$field_i]];
  }
  array_push($result_list , $result_array);
}





include $_SERVER["DOCUMENT_ROOT"]."/include/close_connection.php";


//該当ファイルオープン
$fp = fopen('./satei.csv','w');
if ($fp === FALSE) {
	throw new Exception('ファイルの書き込みに失敗しました。');
}

//何行目かの値
$fput_i = 1;

foreach($result_list as $result_set){
	for ($i=0; $i < count($result_set); $i++) {
		$result_set[$i] = mb_convert_encoding($result_set[$i],"SJIS");
	}
  if(fputcsv($fp, $result_set)){
  	print("item.csv{$fput_i}行目完了<br><pre class='result_set_pre'>");
  	// var_dump($result_set);
  	print("</pre>");
  }else{
  	print("item.csv{$fput_i}行目書き込み失敗しました。<br>失敗データ↓<br><pre class='result_set_pre'>");
  	// var_dump($result_set);
  	print "環境依存文字が使われている可能性があります。";
  	print "失敗SEQ　".$result_set[8];
  	print("</pre>");
  	fclose($fp);
  	exit();
  }
  $fput_i++;
}
fclose($fp);

//リセット
$fput_i = 0;




?>
</body>
</html>
