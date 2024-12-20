<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>合わず日修正</title>
</head>
<body>

<?

mb_internal_encoding("utf8");
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";

//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//全体の抽出対象

$where = "WHERE yahoo_sinaban='X' ";

//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★


$count_koumoku_query = " SELECT COUNT(*) FROM store_products {$where} ";
$count_koumoku_sql = mysql_query('SET NAMES utf8');
$count_koumoku_sql = mysql_query($count_koumoku_query);
$count_koumoku_res = mysql_fetch_assoc($count_koumoku_sql);
// print "該当件数".$count_koumoku_res;
print "該当件数".$count_koumoku_res["COUNT(*)"];


$koumoku_query = " SELECT product_id , AWAZU_DATE FROM store_products {$where} ";
$koumoku_sql = mysql_query('SET NAMES utf8');
$koumoku_sql = mysql_query($koumoku_query);

?>
<pre>
<?
$i = 0;
while ($koumoku_result = mysql_fetch_assoc($koumoku_sql)) {

$product_id = $koumoku_result["product_id"];
$AWAZU_DATE = $koumoku_result["AWAZU_DATE"];
// print "SEQ ".$product_id."<br>";

	$query = " SELECT product_id , AWAZU_DATE FROM store_products_copy74 WHERE product_id={$product_id} ";
	$sql = mysql_query('SET NAMES utf8');
	$sql = mysql_query($query);
	while ($result = mysql_fetch_assoc($sql)) {

//before変数に変形
		$product_id_before = $product_id;
		$AWAZU_DATE_before = $AWAZU_DATE;

//after変数に変形
		$AWAZU_DATE_after = $result["AWAZU_DATE"];


//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//各項目SET内容作成部分

		if($AWAZU_DATE_after != ""){
			$new_AWAZU_DATE = "AWAZU_DATE='{$AWAZU_DATE_after}'";
		}else{
			$new_AWAZU_DATE = "AWAZU_DATE=NULL";
		}

//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★



//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//前後で相違があるものだけを繰り返す
		if($AWAZU_DATE_before != $AWAZU_DATE_after){
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★

			//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
			//前後確認用プリント文
					print "SEQ ".$product_id."\n\n";

					print "変更前"."\n";
					print "AWAZU_DATE ".$AWAZU_DATE_before."\n";

					print "変更後"."\n";
					print "AWAZU_DATE ".$AWAZU_DATE_after."\n";
			//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★



			$up_query = "UPDATE store_products SET {$new_AWAZU_DATE} WHERE product_id={$product_id}";

			//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
			//最終UP文確認用
			print $up_query."\n\n\n\n";
			//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
			//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
			//最終UP実行命令
			// $up_sql = mysql_query('SET NAMES utf8');
			// $up_sql = mysql_query($up_query);
			//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★

			//リセット
			$new_AWAZU_DATE = "";
			$i++;
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//前後で相違があるものだけを繰り返す END
		}
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
	}


}
print "対象総数　".$i;
?>
</pre>
