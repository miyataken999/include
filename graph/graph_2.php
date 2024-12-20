<?
$date_from = htmlspecialchars($_GET["date_from"]);
$date_to = htmlspecialchars($_GET["date_to"]);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ブラカイキーワード詳細</title>
	<link rel="stylesheet" href="">
</head>
<body>

<form action="./graph.php" method="get" accept-charset="utf-8">
<input type="date" name="date_from" value="<?=$date_from?>" placeholder="">
から
<input type="date" name="date_to" value="<?=$date_to?>" placeholder="">
<input type="submit" name="" value="CSVダウンロード">
</form>

<br>

<form action="./graph_2.php" method="get" accept-charset="utf-8">
<input type="date" name="date_from" value="<?=$date_from?>" placeholder="">
から
<input type="date" name="date_to" value="<?=$date_to?>" placeholder="">
<input type="submit" name="" value="そのまま表示">
</form>

<br>
<br>


<?
//エラー出力⇒これ出したらCSVぐちゃぐちゃになる
// ini_set( 'display_errors', 1 );
mb_internal_encoding("utf8");
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";

//★★★★★★★★★★★★★★★★★★★★★★★★★★★可変部分★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
// $koumoku_from = "mst_label_output"; //対象CSVマスタ
$koumoku = "search_contents";
$from = " FROM brakai_kensaku"; //対象テーブル
$where = " WHERE date BETWEEN '{$date_from}' AND '{$date_to}'"; //抽出対象
//★★★★★★★★★★★★★★★★★★★★★★★★★★★可変部分★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★



//追加項目
$query = " SELECT distinct {$koumoku} {$from} {$where} ";

$sql = mysql_query('SET NAMES utf8');
$sql = mysql_query($query);


	$res_array = array();
	$last_list = array();


	while ($result = mysql_fetch_assoc($sql)) {
		$key = $result["search_contents"];
		$key_query = " SELECT COUNT(*) {$from} {$where} AND search_contents='{$key}' ";
		$key_sql = mysql_query('SET NAMES utf8');
		$key_sql = mysql_query($key_query);
		$key_result = mysql_fetch_assoc($key_sql);


		//★★★★★★★★★★★★★★★★★★★★★★★★★★★データ作成★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
		$result_array[$key] = $key_result["COUNT(*)"];
		//★★★★★★★★★★★★★★★★★★★★★★★★★★★データ作成★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★

	}

//並べ替えしてから
	arsort($result_array);
	// foreach ($result_array as $key => $value) {
	// 	array_push($last_list , array($key,$value));
	// }


?>
<table>
	<tr>
		<td>キーワード</td>
		<td>カウント</td>
	</tr>
<?
	foreach ($result_array as $key => $value) {
		print "<tr>";
		print "<td>".$key."</td>";
		print "<td>".$value."</td>";
		print "</tr>";
	}
?>

</table>

</body>
</html>
