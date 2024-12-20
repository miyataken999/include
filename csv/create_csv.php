<?
//エラー出力⇒これ出したらCSVぐちゃぐちゃになる
// ini_set( 'display_errors', 1 );
mb_internal_encoding("utf8");
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";

//★★★★★★★★★★★★★★★★★★★★★★★★★★★可変部分★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
$koumoku_from = "mst_label_output"; //対象CSVマスタ
$from = " FROM store_products"; //対象テーブル
$where = " WHERE label_output_flag=1"; //抽出対象
//★★★★★★★★★★★★★★★★★★★★★★★★★★★可変部分★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★

//+++++++++++++++++++++++++++++++++++++++
//CSV項目名をマスタからひっぱる
//+++++++++++++++++++++++++++++++++++++++


$koumoku_query = " SELECT {$koumoku_from}.field_name , {$koumoku_from}.csv_name FROM {$koumoku_from} ORDER BY sort ";
$koumoku_sql = mysql_query('SET NAMES utf8');
$koumoku_sql = mysql_query($koumoku_query);

$csv_name = array(); //csv表示名を入れる （1行目）
$field_name = ""; //SELECT値を入れる （2行目以降）
$field_name_array = array();
$field_i = 1;
	while ($koumoku_result = mysql_fetch_assoc($koumoku_sql)) {
		if($field_i == 1){
			array_push($csv_name , $koumoku_result["csv_name"]);
			$field_name .= $koumoku_result["field_name"];
			array_push($field_name_array , $koumoku_result["field_name"]);

			$field_i++;
		}else{
			array_push($csv_name , $koumoku_result["csv_name"]);
			$field_name .= " , ".$koumoku_result["field_name"];
			array_push($field_name_array , $koumoku_result["field_name"]);
		}
	}




//+++++++++++++++++++++++++++++++++++++++
//CSVデータをひっぱる
//+++++++++++++++++++++++++++++++++++++++
//★★★★★★★★★★★★★★★★★★★★★★★★★★★データ作成★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//追加項目
$field_name .= ' , A_storage , priority ';
//★★★★★★★★★★★★★★★★★★★★★★★★★★★データ作成★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
$query = ' SELECT '.$field_name.$from.$where;

$sql = mysql_query('SET NAMES utf8');
$sql = mysql_query($query);

header('Content-Type: text/csv');
header("Content-Disposition: attachment; filename=label_output.csv");
$fp = fopen('php://output','w');
if ($fp === FALSE) {
	throw new Exception('ファイルの書き込みに失敗しました。');
}
//CSVをエクセルで開くことを想定して文字コードをSJISへ変換する設定を行う
stream_filter_append($fp, 'convert.iconv.UTF-8/CP932', STREAM_FILTER_WRITE);

$user_list = array($csv_name);
$count_field = count($field_name_array);
$result_array = array();
	while ($result = mysql_fetch_assoc($sql)) {
		for ($field_i=0; $field_i < $count_field; $field_i++) {
			//★★★★★★★★★★★★★★★★★★★★★★★★★★★データ作成★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
			//---ラベル出力
			if($field_name_array[$field_i] == "raku_title"){
				if($result['A_storage'] == 1){
					$result[$field_name_array[$field_i]] .= "/A保管";
				}
				if($result['priority'] == 1){
					$result[$field_name_array[$field_i]] .= "/優先";
				}
			}

			//★★★★★★★★★★★★★★★★★★★★★★★★★★★データ作成★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
			$result_array[$field_i] = $result[$field_name_array[$field_i]];
		}
			array_push($user_list , $result_array);
	}


foreach($user_list as $user){
  fputcsv($fp, $user);
}
fclose($fp);






//+++++++++++++++++++++++++++++++++++++++
//CSVデータを出力後の処理
//+++++++++++++++++++++++++++++++++++++++

//★★★★★★★★★★★★★★★★★★★★★★★★★★★可変部分★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//CSV出力後の処理

//ラベルフラグ外す
$up_query = " UPDATE store_products SET label_output_flag=0 WHERE label_output_flag=1 ";
$up_sql = mysql_query('SET NAMES utf8');
$up_sql = mysql_query($up_query);

//★★★★★★★★★★★★★★★★★★★★★★★★★★★可変部分★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★





?>
