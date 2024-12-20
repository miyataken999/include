<?
//エラー出力⇒これ出したらCSVぐちゃぐちゃになる
// ini_set( 'display_errors', 1 );
mb_internal_encoding("utf8");
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";

//★★★★★★★★★★★★★★★★★★★★★★★★★★★可変部分★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
// $koumoku_from = "mst_label_output"; //対象CSVマスタ
$koumoku = "search_contents";
$from = " FROM brakai_kensaku"; //対象テーブル
$date_from = htmlspecialchars($_GET["date_from"]);
$date_to = htmlspecialchars($_GET["date_to"]);
$where = " WHERE date BETWEEN '{$date_from}' AND '{$date_to}'"; //抽出対象
//★★★★★★★★★★★★★★★★★★★★★★★★★★★可変部分★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★

//+++++++++++++++++++++++++++++++++++++++
//CSVデータをひっぱる
//+++++++++++++++++++++++++++++++++++++++
//追加項目
$query = " SELECT distinct {$koumoku} {$from} {$where} ";

$sql = mysql_query('SET NAMES utf8');
$sql = mysql_query($query);





	header('Content-Type: text/csv');
	header("Content-Disposition: attachment; filename=brakai_keyword({$date_from}~{$date_to}).csv");
	$fp = fopen('php://output','w');
	if ($fp === FALSE) {
		throw new Exception('ファイルの書き込みに失敗しました。');
	}
	// CSVをエクセルで開くことを想定して文字コードをSJISへ変換する設定を行う
	stream_filter_append($fp, 'convert.iconv.UTF-8/CP932', STREAM_FILTER_WRITE);

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
	foreach ($result_array as $key => $value) {
		array_push($last_list , array($key,$value));
	}
	// print_r($last_list);

//最後に、項目名
	$user_list = array("キーワード","カウント");
	array_unshift($last_list, $user_list);


foreach($last_list as $last){
	fputcsv($fp, $last);
}
fclose($fp);






//+++++++++++++++++++++++++++++++++++++++
//CSVデータを出力後の処理
//+++++++++++++++++++++++++++++++++++++++






?>
