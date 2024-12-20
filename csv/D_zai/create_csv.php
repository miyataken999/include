<?
//エラー出力⇒これ出したらCSVぐちゃぐちゃになる
// ini_set( 'display_errors', 1 );
mb_internal_encoding("utf8");
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";

//★★★★★★★★★★★★★★★★★★★★★★★★★★★可変部分★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
$koumoku_from = "mst_D_zai_output"; //対象CSVマスタ
$from = " FROM PMT_EV001"; //対象テーブル
$where = " WHERE APP_UID=1413"; //抽出対象
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

		//表示名が空の場合は値名を出力
		if($koumoku_result["csv_name"] == ""){
			$koumoku_result["csv_name"] = $koumoku_result["field_name"];
		}

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
// $field_name .= ' , Destination_selling , Finish , Discrimination , accessories , priority , A_storage';
//★★★★★★★★★★★★★★★★★★★★★★★★★★★データ作成★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
$query = ' SELECT '.$field_name.$from.$where;

$sql = mysql_query('SET NAMES utf8');
$sql = mysql_query($query);

header('Content-Type: text/csv');
header("Content-Disposition: attachment; filename=PMT_EV001.csv");
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
			//★★★★★★★★★★★★★★★★★★★★日本語変換★★★★★★★★★★★★★★★★★★★★
					$henkan_sql = mysql_query('SET NAMES utf8');

					if($field_name_array[$field_i] == "DA_RESPONSIBLE"){
						$henkan_sql = mysql_query("SELECT first_name FROM users WHERE user_id=".$result[$field_name_array[$field_i]]." LIMIT 1");
						$henkan_result = mysql_fetch_assoc($henkan_sql);
						$result[$field_name_array[$field_i]] = $henkan_result["first_name"];
					}
			//★★★★★★★★★★★★★★★★★★★★日本語変換★★★★★★★★★★★★★★★★★★★★


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
// $up_query = " UPDATE store_products SET label_output_flag=0 , status=29 WHERE label_output_flag=1 ";
// $up_sql = mysql_query('SET NAMES utf8');
// $up_sql = mysql_query($up_query);

//★★★★★★★★★★★★★★★★★★★★★★★★★★★可変部分★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★





?>
