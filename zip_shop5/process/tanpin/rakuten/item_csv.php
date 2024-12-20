<?
//エラー出力⇒これ出したらCSVぐちゃぐちゃになる
// ini_set( 'display_errors', 1 );

//★★★★★★★★★★★★★★★★★★★★★★★★★★★可変部分★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
$koumoku_from = " mst_csv_raku_item "; //対象CSVマスタ
$from = " FROM shouhin INNER JOIN auctions ON shouhin.product_id = auctions.product_id  "; //対象テーブル
$where = " WHERE shouhin.product_id={$seq} "; //抽出対象
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
//追加項目
$field_name .= ' , shouhin.product_id , shouhin.yahoo_condition2 , shouhin.sub_category_id1 , auctions.raku_new_arrival_url , auctions.sales_period_designation , auctions.Qty , shouhin.Finish , shouhin.yahoo_sozai , shouhin.item_name , shouhin.line ';

$query = ' SELECT '.$field_name.$from.$where;

$sql = mysql_query('SET NAMES utf8');
$sql = mysql_query($query);

//該当ファイルオープン
$fp = fopen('./rakuten/ritem/batch/item.csv','w');
if ($fp === FALSE) {
	throw new Exception('ファイルの書き込みに失敗しました。');
}
//CSVをエクセルで開くことを想定して文字コードをSJISへ変換する設定を行う
// stream_filter_append($fp, 'convert.iconv.UTF-8/CP932', STREAM_FILTER_WRITE);

$result_list = array($csv_name);
$count_field = count($field_name_array);
$result_array = array();

$temp_img = "";
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
					//★★★★★★★★★★★★★★★★★★★★★★★★テンプレート処理★★★★★★★★★★★★★★★★★★★★★★★
						if($field_name_array[$field_i] == "temp_pc"){
							$temp_pc = file_get_contents("/include/rakuten_template/pc/temp.php?product_id=".$result["product_id"]);
							$temp_pc = str_replace("\"","'",$temp_pc);
							//全体反映処理
							if($raku_hanbaikikan != ""){
								$temp_pc = str_replace("★created_at★",$raku_hanbai_start,$temp_pc);
							}
							$result[$field_name_array[$field_i]] = $temp_pc;
							$temp_pc = "";
						}elseif($field_name_array[$field_i] == "temp_sp"){
							$temp_sp = file_get_contents("/include/rakuten_template/sp/temp.php?product_id=".$result["product_id"]);
							$temp_sp = str_replace("\"","'",$temp_sp);
							//全体反映処理
							if($raku_hanbaikikan != ""){
								$temp_sp = str_replace("★出品日★",$raku_hanbai_start,$temp_sp);
							}
							//全体反映処理
							if($raku_new_arrival_url != ""){
								$temp_sp = str_replace("★★★新着★★★",$raku_new_arrival_url,$temp_sp);
							}else{
								if($result["raku_new_arrival_url"] != ""){
									$temp_sp = str_replace("★★★新着★★★",$result["raku_new_arrival_url"],$temp_sp);
								}
							}
							$result[$field_name_array[$field_i]] = $temp_sp;
							$temp_sp = "";
						}elseif($field_name_array[$field_i] == "temp_mobile"){
							$temp_mb = file_get_contents("/include/rakuten_template/mobile/temp.php?product_id=".$result["product_id"]);
							$result[$field_name_array[$field_i]] = $temp_mb;
							$temp_mb = "";
						}elseif($field_name_array[$field_i] == "image_url"){
							for ($img_set_i=1; $img_set_i <= $img_set; $img_set_i++) {
								$temp_img .= "https://image.rakuten.co.jp/rfstore/cabinet/{$raku_image_name}/".$result["product_id"]."_{$img_set_i}.jpg ";
							}
							$result[$field_name_array[$field_i]] = $temp_img;
							$temp_img = "";
						}elseif($field_name_array[$field_i] == "Qty"){
							if($result["Qty"] != ""){
								$result[$field_name_array[$field_i]] = $result["Qty"];
							}else{
								$result[$field_name_array[$field_i]] = 1;
							}
							//全体反映処理
							if($raku_zaikosuu != ""){
								$result[$field_name_array[$field_i]] = $raku_zaikosuu;
							}
						}elseif($field_name_array[$field_i] == "tag_id"){
							if($result["yahoo_condition2"] == "N"){
								$result[$field_name_array[$field_i]] = 9000007;
							}elseif($result["yahoo_condition2"] == "S"){
								$result[$field_name_array[$field_i]] = 9000002;
							}elseif($result["yahoo_condition2"] == "A"){
								$result[$field_name_array[$field_i]] = 9000004;
							}elseif($result["yahoo_condition2"] == "B"){
								$result[$field_name_array[$field_i]] = 9000005;
							}elseif($result["yahoo_condition2"] == "C"){
								$result[$field_name_array[$field_i]] = 9000005;
							}
							if($result[$field_name_array[$field_i]] == ""){
								$result[$field_name_array[$field_i]] = 9000001;
							}else{
								$result[$field_name_array[$field_i]] = $result[$field_name_array[$field_i]]."/9000001";
							}

						}


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

						//楽天タイトル　改行コード削除
						if($field_name_array[$field_i] == "raku_goods_name"){
							$result[$field_name_array[$field_i]] = str_replace("\n","",$result[$field_name_array[$field_i]]);
						}

						//品番の場合、小文字
						if($csv_name[$field_i] == "商品管理番号（商品URL）"){
							$motomoto = $result[$field_name_array[$field_i]];
							$result[$field_name_array[$field_i]] = strtolower($result[$field_name_array[$field_i]]);
						}
						if($csv_name[$field_i] == "商品番号"){
							$result[$field_name_array[$field_i]] = $motomoto;
						}

						//全体反映処理
						if($field_name_array[$field_i] == "raku_goods_name"){
							if($raku_shouhinmei != ""){
								$result[$field_name_array[$field_i]] = str_replace("【中古】",$raku_shouhinmei,$result[$field_name_array[$field_i]]);
							}
						}elseif($field_name_array[$field_i] == "sales_period_designation"){
							if($raku_hanbaikikan != ""){
								$result[$field_name_array[$field_i]] = $raku_hanbaikikan;
							}
						}elseif($field_name_array[$field_i] == "raku_tag_result"){
							if($result[$field_name_array[$field_i]] == ""){
								if($result["yahoo_condition2"] == "N"){
									$result[$field_name_array[$field_i]] = 9000007;
								}elseif($result["yahoo_condition2"] == "S"){
									$result[$field_name_array[$field_i]] = 9000002;
								}elseif($result["yahoo_condition2"] == "A"){
									$result[$field_name_array[$field_i]] = 9000004;
								}elseif($result["yahoo_condition2"] == "B"){
									$result[$field_name_array[$field_i]] = 9000005;
								}elseif($result["yahoo_condition2"] == "C"){
									$result[$field_name_array[$field_i]] = 9000005;
								}
								if($result[$field_name_array[$field_i]] == ""){
									$result[$field_name_array[$field_i]] = 9000001;
								}else{
									$result[$field_name_array[$field_i]] = $result[$field_name_array[$field_i]]."/9000001";
								}
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
?>
<style type="text/css" media="screen">
	.result_set_pre div{
		display: none;
	}
</style>
<?

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






//+++++++++++++++++++++++++++++++++++++++
//CSVデータを出力後の処理
//+++++++++++++++++++++++++++++++++++++++





?>
