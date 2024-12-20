<?
//エラー出力⇒これ出したらCSVぐちゃぐちゃになる
// ini_set( 'display_errors', 1 );

//★★★★★★★★★★★★★★★★★★★★★★★★★★★可変部分★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
$koumoku_from = " mst_csv_raku_select "; //対象CSVマスタ
$from = " FROM shouhin INNER JOIN auctions ON shouhin.product_id = auctions.product_id  "; //対象テーブル
$where = " WHERE box_id={$box_id} "; //抽出対象
//★★★★★★★★★★★★★★★★★★★★★★★★★★★可変部分★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★

//+++++++++++++++++++++++++++++++++++++++
//CSV項目名をマスタからひっぱる
//+++++++++++++++++++++++++++++++++++++++


$koumoku_query = " SELECT field_name , csv_name , kotei_check , input_string , table_name FROM {$koumoku_from} ORDER BY sort ";
$koumoku_sql = mysql_query('SET NAMES utf8');
$koumoku_sql = mysql_query($koumoku_query);

$csv_name = array(); //csv表示名を入れる （1行目）
$field_name = ""; //SELECT値を入れる （2行目以降）
$field_name_array = array();


//固定値関連
$kotei_check = array();//固定フラグを入れる
$input_string = array();//固定文字列を入れる

$field_i = 1;
	while ($koumoku_result = mysql_fetch_assoc($koumoku_sql)) {
		array_push($csv_name , $koumoku_result["csv_name"]);
		array_push($kotei_check , $koumoku_result["kotei_check"]);
		array_push($input_string , $koumoku_result["input_string"]);
		array_push($field_name_array , $koumoku_result["field_name"]);

		$table_name = $koumoku_result["table_name"];

		if(($table_name != "") && ($koumoku_result["field_name"] != "")){
			$koumoku_result["field_name"] = ".".$koumoku_result["field_name"];
		}

		if($field_name == ""){
			if(($table_name != "") && ($koumoku_result["field_name"] != "")){
				$field_name .= $table_name.$koumoku_result["field_name"];
			}
			$field_i++;
		}else{
			if(($table_name != "") && ($koumoku_result["field_name"] != "")){
				$field_name .= " , ".$table_name.$koumoku_result["field_name"];
			}
		}

	}




//+++++++++++++++++++++++++++++++++++++++
//CSVデータをひっぱる
//+++++++++++++++++++++++++++++++++++++++
$field_name .= " , shouhin.sub_category_id1 , shouhin.yahoo_sozai , shouhin.item_name , shouhin.line , auctions.raku_goods_name  ";
$query = ' SELECT '.$field_name.$from.$where;

$sql = mysql_query('SET NAMES utf8');
$sql = mysql_query($query);

//該当ファイルオープン
$fp = fopen('./rakuten/ritem/batch/select.csv','w');
if ($fp === FALSE) {
	throw new Exception('ファイルの書き込みに失敗しました。');
}
//CSVをエクセルで開くことを想定して文字コードをSJISへ変換する設定を行う
// stream_filter_append($fp, 'convert.iconv.UTF-8/CP932', STREAM_FILTER_WRITE);

$result_list = array($csv_name);
$count_field = count($field_name_array);
$result_array = array();
	while ($result = mysql_fetch_assoc($sql)) {
		$hikakumoji = "";
		$hikakumoji = $result["yahoo_sozai"]." ".$result["item_name"]." ".$result["line"]." ".$result["raku_goods_name"];
		if(
			(strpos($hikakumoji, "象牙") !== false ) OR
			(strpos($hikakumoji, "鼈甲") !== false ) OR
			(strpos($hikakumoji, "べっ甲") !== false ) OR
			(strpos($hikakumoji, "ベッ甲") !== false ) OR
			(strpos($hikakumoji, "ベっ甲") !== false ) OR
			(strpos($hikakumoji, "べッ甲") !== false ) OR
			(strpos($hikakumoji, "タイマイ") !== false ) OR
			($result["sub_category_id1"] == 384) OR
			($result["sub_category_id1"] == 385) OR
			($result["sub_category_id1"] == 386) OR
			($result["sub_category_id1"] == 387) OR
			($result["sub_category_id1"] == 388) OR
			($result["sub_category_id1"] == 389) OR
			($result["sub_category_id1"] == 390) OR
			($result["sub_category_id1"] == 499) OR
			($result["sub_category_id1"] == 500) OR
			($result["sub_category_id1"] == 501) OR
			($result["sub_category_id1"] == 502) OR
			($result["sub_category_id1"] == 503) OR
			($result["sub_category_id1"] == 504) OR
			($result["sub_category_id1"] == 505) OR
			($result["sub_category_id1"] == 540) OR
			($result["sub_category_id1"] == 556) OR
			($result["sub_category_id1"] == 591) OR
			($result["sub_category_id1"] == 607)
		){
			continue;
		}

		for ($field_i=0; $field_i < $count_field; $field_i++) {
			//★★★★★★★★★★★★★★★★★★★★★★★★★★★データ作成★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
			//$field_name_array[$field_i]・・・現在の項目の値名

			if($kotei_check[$field_i] == true){		//固定チェックが入っている場合
				if($field_name_array[$field_i] != ""){
					//★テンプレート処理★★★★★★★
					//★テンプレート処理★★★★★★★
				}else{
					$result[$field_name_array[$field_i]] = $input_string[$field_i];		//固定文字列を入れる
				}
			}else{		//固定チェック入っていない場合

				if($field_name_array[$field_i] != ""){
					//★セレクト処理★★★★★★★★★★★★
						$field_query = ' SELECT '.$field_name.$from." WHERE shouhin.product_id=".$result["product_id"];
						// echo $field_query."<br>";
						$field_sql = mysql_query('SET NAMES utf8');
						$field_sql = mysql_query($field_query);
						$field_result = mysql_fetch_assoc($field_sql);


						//品番の場合、小文字
						if($field_name_array[$field_i] == "yahoo_sinaban"){
							$result[$field_name_array[$field_i]] = strtolower($result[$field_name_array[$field_i]]);
						}

						// echo $field_name_array[$field_i]."<br>";
						// var_dump($field_result);
						// echo "<br><br>";
						// echo $result[$field_name_array[$field_i]] = $field_result[$field_name_array[$field_i]];
						//リセット
						$field_query = "";
						$field_sql = "";
					//★セレクト処理★★★★★★★★★★★★
				}else{
					//★空欄★★★★★★★★★★★★
					$result[$field_name_array[$field_i]] = "";
					//★空欄★★★★★★★★★★★★
				}



			}
			//★★★★★★★★★★★★★★★★★★★★★★★★★★★データ作成★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
			$result_array[$field_i] = $result[$field_name_array[$field_i]];
		}
			array_push($result_list , $result_array);
			$result_array[4] = "ラッピングあり（納品書なし）	";
			array_push($result_list , $result_array);
			$result_array[4] = "ラッピングあり（納品書あり）";
			array_push($result_list , $result_array);
	}


//何行目かの値
$fput_i = 1;

foreach($result_list as $result_set){
	for ($i=0; $i < count($result_set); $i++) {
		$result_set[$i] = mb_convert_encoding($result_set[$i],"SJIS");
	}
  if(fputcsv($fp, $result_set)){
  	print("select.csv{$fput_i}行目完了<br>");
  }else{
  	print("select.csv{$fput_i}行目書き込み失敗しました。<br>");
  	exit();
  }
  $fput_i++;
}
fclose($fp);

//リセット
$fput_i = 0;






//+++++++++++++++++++++++++++++++++++++++
//CSVデータを出力後の処理
//+++++++++++++++++++++++++++++++++++++++





?>
