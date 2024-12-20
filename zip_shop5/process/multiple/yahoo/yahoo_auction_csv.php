<?
//エラー出力⇒これ出したらCSVぐちゃぐちゃになる
// ini_set( 'display_errors', 1 );

//★★★★★★★★★★★★★★★★★★★★★★★★★★★可変部分★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
$koumoku_from = " mst_csv_yahoo_auction "; //対象CSVマスタ
$from = " FROM shouhin INNER JOIN auctions ON shouhin.product_id = auctions.product_id  "; //対象テーブル
$where = $where_box; //抽出対象
//★★★★★★★★★★★★★★★★★★★★★★★★★★★可変部分★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
// ini_set("display_errors",1);
$jogaifile = file_get_contents("/include/zip_shop5/jogai.txt");
$jogai_array = explode("\n",$jogaifile);
$jogai_where = "";
for ($i=0; $i < count($jogai_array); $i++) {
	$jogai = $jogai_array[$i];
	if($jogai != ""){
		if($jogai_where != ""){
			$jogai_where .= " AND (yahoo_sinaban != '{$jogai}')";
		}else{
			$jogai_where .= " (yahoo_sinaban != '{$jogai}')";
		}
	}
}
$where = "{$where} AND ( {$jogai_where} ) ";



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
//product_idを取得できるように設定
//+++++++++++++++++++++++++++++++++++++++
$field_name .= " , shouhin.product_id , shouhin.box_id , shouhin.sub_category_id1 , shouhin.category_id , shouhin.yahoo_condition2 , shouhin.Finish , shouhin.yahoo_sozai , shouhin.item_name , shouhin.line , auctions.raku_goods_name ";
//+++++++++++++++++++++++++++++++++++++++
//CSVデータをひっぱる
//+++++++++++++++++++++++++++++++++++++++
$query = ' SELECT '.$field_name.$from.$where;
// print "<br>query ".$query."<br>";
// exit();

$sql = mysql_query('SET NAMES utf8');
$sql = mysql_query($query);

//ファイル作成
$file_pass = "./tmp/yahoo/{$box_id_default}.csv";
$file = file_exists($file_pass);
if ($file === FALSE) {
	echo "ファイルが存在していません。新規作成します。<br>";
	if (touch($file_pass)) {
		echo "新規作成に成功しました。<br>";
		if (chmod($file_pass,0666)) {
			echo "パーミッションの設定に成功しました。<br>";
		}else{
			echo "パーミッションの設定に失敗しました。<br>";
			exit();
		}
	}else{
		echo "新規作成に失敗しました。<br>";
		exit();
	}
}else{
	echo "ファイルが存在しています。上書きします。<br>";
}

//該当ファイルオープン
$fp = fopen($file_pass,'w');
if ($fp === FALSE) {
	throw new Exception('ファイルの書き込みに失敗しました。');
}
//CSVをエクセルで開くことを想定して文字コードをSJISへ変換する設定を行う
// stream_filter_append($fp, 'convert.iconv.UTF-8/CP932', STREAM_FILTER_WRITE);

$result_list = array($csv_name);
$count_field = count($field_name_array);
$result_array = array();

$gazou_i = 0;
$over_out_id = "";
	while ($result = mysql_fetch_assoc($sql)) {
		for ($field_i=0; $field_i < $count_field; $field_i++) {
			//★★★★★★★★★★★★★★★★★★★★★★★★★★★データ作成★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
			//$field_name_array[$field_i]・・・現在の項目の値名

			if($kotei_check[$field_i] == true){		//固定チェックが入っている場合
				if($field_name_array[$field_i] != ""){
					//★★★★★★★★★★★★★★★★★★★★★★★★テンプレート処理★★★★★★★★★★★★★★★★★★★★★★★
						if($field_name_array[$field_i] == "tmp_yahoo"){
							$temp_pc = file_get_contents("/include/yahoo_template/temp.php?product_id=".$result["product_id"]);
							$temp_pc = str_replace("\"","",$temp_pc);
							$temp_pc = str_replace("\r\n","",$temp_pc);
							//全体反映処理
							if($raku_hanbaikikan != ""){
								$temp_pc = str_replace("★created_at★",$raku_hanbai_start,$temp_pc);
							}
							$result[$field_name_array[$field_i]] = $temp_pc;
							$temp_pc = "";
						}
						if($field_name_array[$field_i] == "product_id_num_jpg"){
							$gazou_i++;
							if($over_out_id != $result["product_id"]){
								$result[$field_name_array[$field_i]] = $result["product_id"]."_{$gazou_i}.jpg";
							}else{
								$result[$field_name_array[$field_i]] = "";
							}
							$img_set = $img_set_array[$result["box_id"]];
							if($gazou_i == $img_set){
								$gazou_i = 0;
								$over_out_id = $result["product_id"];
							}
							//レコード変わったらリセット
						}
						if($field_name_array[$field_i] == "kaigai"){
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
								// (strpos($hikakumoji, "珊瑚") !== false ) OR
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
								$result[$field_name_array[$field_i]] = "いいえ";
							}else{
								$result[$field_name_array[$field_i]] = "はい";
							}
						}
						if($field_name_array[$field_i] == "old_or_new"){
							if($result["category_id"] == 17){
								$result[$field_name_array[$field_i]] = "新品";
							}else{
								$result[$field_name_array[$field_i]] = "中古";
							}
						}
						if($field_name_array[$field_i] == "condition_bikou"){
							if($result["category_id"] == 17){
								$result[$field_name_array[$field_i]] = "還流品となります。";
							}elseif(
								($result["yahoo_condition2"] == "N") AND
							 	(
							 		($result["category_id"] == 10) OR
							 		($result["category_id"] == 18) OR
							 		($result["category_id"] == 19) OR
							 		($result["category_id"] == 20) OR
							 		($result["category_id"] == 21) OR
							 		($result["category_id"] == 22) OR
							 		($result["category_id"] == 23) OR
							 		($result["category_id"] == 50) OR
							 		($result["category_id"] == 51)
						 		)
							){
								if(
									($result["Finish"] == "JB(通常)") OR
									($result["Finish"] == "JB(メッキ)") OR
									($result["Finish"] == "JB(特殊)") OR
									($result["Finish"] == "JB(横持ち)") OR
									($result["Finish"] == "SK") OR
									($result["Finish"] == "真科研仕上(糸無通常)") OR
									($result["Finish"] == "真科研仕上(糸無マイクロ)	") OR
									($result["Finish"] == "真科研仕上げ(通常ノットGPT)") OR
									($result["Finish"] == "真科研仕上げ(ALLノットGPT)") OR
									($result["Finish"] == "真科研仕上げ(通常ノットワイヤー)") OR
									($result["Finish"] == "真科研仕上げ(ALLノットワイヤー)") OR
									($result["Finish"] == "大樹")
								){
									$result[$field_name_array[$field_i]] = "新品仕上済みとなります。";
								}elseif(
									($result["Finish"] == "ブティック(宝飾)") OR
									($result["Finish"] == "ブティック(時計)") OR
									($result["Finish"] == "ブティック(服飾)")
								){
									$result[$field_name_array[$field_i]] = "ブティックにて仕上済みです。";
								}else{
									$result[$field_name_array[$field_i]] = "";
								}
							}else{
								$result[$field_name_array[$field_i]] = "";
							}
						}//end condition_bikou

						if($field_name_array[$field_i] == "jpg_1_comment"){
							if(
								($result["yahoo_condition2"] == "N") AND
							 	(
							 		($result["category_id"] == 10) OR
							 		($result["category_id"] == 18) OR
							 		($result["category_id"] == 19) OR
							 		($result["category_id"] == 20) OR
							 		($result["category_id"] == 21) OR
							 		($result["category_id"] == 22) OR
							 		($result["category_id"] == 23) OR
							 		($result["category_id"] == 50) OR
							 		($result["category_id"] == 51)
						 		)
							){
								if(
									($result["Finish"] == "JB(通常)") OR
									($result["Finish"] == "JB(メッキ)") OR
									($result["Finish"] == "JB(特殊)") OR
									($result["Finish"] == "JB(横持ち)") OR
									($result["Finish"] == "SK") OR
									($result["Finish"] == "真科研仕上(糸無通常)") OR
									($result["Finish"] == "真科研仕上(糸無マイクロ)	") OR
									($result["Finish"] == "真科研仕上げ(通常ノットGPT)") OR
									($result["Finish"] == "真科研仕上げ(ALLノットGPT)") OR
									($result["Finish"] == "真科研仕上げ(通常ノットワイヤー)") OR
									($result["Finish"] == "真科研仕上げ(ALLノットワイヤー)") OR
									($result["Finish"] == "大樹")
								){
									$result[$field_name_array[$field_i]] = "新品仕上済みのお品物です★";
								}elseif(
									($result["Finish"] == "ブティック(宝飾)") OR
									($result["Finish"] == "ブティック(時計)") OR
									($result["Finish"] == "ブティック(服飾)")
								){
									$result[$field_name_array[$field_i]] = "ブティックでの仕上済み★";
								}else{
									$result[$field_name_array[$field_i]] = "";
								}
							}else{
								$result[$field_name_array[$field_i]] = "";
							}
						}//end jpg_1_comment


					//★★★★★★★★★★★★★★★★★★★★★★★★テンプレート処理★★★★★★★★★★★★★★★★★★★★★★★
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

						//Yタイトル　改行コード削除
						if($field_name_array[$field_i] == "Title"){
							$result[$field_name_array[$field_i]] = str_replace("\n","",$result[$field_name_array[$field_i]]);
						}
						//全体反映処理
						if($field_name_array[$field_i] == "Items_in_the_store_for_the_search_keyword"){
							if($y_key_word != ""){
								$result[$field_name_array[$field_i]] = $y_key_word.$result[$field_name_array[$field_i]];
							}
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
	}


//何行目かの値
$fput_i = 1;

foreach($result_list as $result_set){
	for ($i=0; $i < count($result_set); $i++) {
		$result_set[$i] = mb_convert_encoding($result_set[$i],"SJIS");
	}
  if(fputcsv($fp, $result_set)){
  	print("ヤフオクcsv{$fput_i}行目完了<br>");
  }else{
  	print("ヤフオクcsv{$fput_i}行目書き込み失敗しました。<br>");
  	print "環境依存文字が使われている可能性があります。";
  	print "失敗品番　".$result_set[0];
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
