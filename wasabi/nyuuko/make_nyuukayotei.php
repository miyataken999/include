<?
//ログイン認証
include_once $_SERVER["DOCUMENT_ROOT"]."/include/login/login.php";

//出力項目の設定
$n_csv = array();

$n_csv['seq_no'] = "seq_no";
$n_csv['予定日'] = "date";
$n_csv['仕入単価'] = "kotei";//0
$n_csv['取引先id'] = "kotei";//2
$n_csv['型番'] = "yahoo_sinaban";
$n_csv['予定数'] = "kotei";
$n_csv['メモ'] = "kotei";
$n_csv['相手伝票ＮＯ'] = "den_no";

$n_koumoku_name = array();
$n_koumoku_key = array();
$n_sql_key = "";
foreach ($n_csv as $n_key => $n_value) {
	$n_koumoku_name[] = $n_key;
	$n_koumoku_key[] = $n_value;

	if($n_value == "yahoo_sinaban"){
		$n_sql_key ? $n_sql_key .= ",".$n_value : $n_sql_key .= $n_value;
	}else{
		//なし
	}
}

$n_csv_array = array($n_koumoku_name);
$n_categori_array = array(10,17,18,19,20,21,22,23,24,25,26,27,28,50,51);
$not_cate = "";
if($a_to_b != "on"){
	for ($i=0; $i < count($categori_array); $i++) {
			$not_cate .= " AND category_id!={$categori_array[$i]} ";
	}
	$not_cate .= "AND (A_storage!=1 OR ISNULL(A_storage))";
}

//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★対象のセレクタ指定★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
	if($product_ids != ""){
		$n_query = "SELECT {$sql_key} FROM shouhin WHERE product_id IN ({$product_ids}) {$not_cate}";
	}elseif($product_id != ""){
		$n_query = "SELECT {$n_sql_key} FROM shouhin WHERE product_id={$product_id} {$not_cate}";
	}elseif($ws_import_date != ""){
		$n_query = "SELECT {$n_sql_key} FROM shouhin WHERE ws_import_date='{$ws_import_date}' {$not_cate}";
	}elseif($box_id != ""){
		$n_query = "SELECT {$n_sql_key} FROM shouhin WHERE box_id='{$box_id}' {$not_cate}";
	}else{
		print "該当なし";
		exit();
	}
	print $n_query;
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★END 対象のセレクタ指定★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■


//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★商品データ取得★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
	$n_sql = mysql_query('SET NAMES utf8');
	$n_sql = mysql_query($n_query);
	$n_count = 0;
	$n_denDate = date("Y")-2000;
	$n_denDate = $n_denDate.date("mdHis");
	while ($n_res = mysql_fetch_assoc($n_sql)) {
		$n_count++;
		$n_res_array = "";
		for ($n_i=0; $n_i < count($n_koumoku_key); $n_i++) {
			$n_result = "";//初期化
			if($n_koumoku_key[$n_i] == "kotei"){
				if($n_koumoku_name[$n_i] == "仕入単価"){
					$n_result = '0';
				}elseif($n_koumoku_name[$n_i] == "取引先id"){
					$n_result = '0002';
				}elseif($n_koumoku_name[$n_i] == "予定数"){
					$n_result = '1';
				}elseif($n_koumoku_name[$n_i] == "メモ"){
					$n_result = '';
				}
			}elseif($n_koumoku_key[$n_i] == "date"){
				$n_result = $n_date;
			}elseif($n_koumoku_key[$n_i] == "seq_no"){
				$n_result = $n_denDate.$n_count;
			}elseif($n_koumoku_key[$n_i] == "den_no"){
				$n_result = $n_denDate."--".$n_count;
			}else{
				$n_result = $n_res[$n_koumoku_key[$n_i]];
			}
			$n_res_array[$n_i] = $n_result;
		}
		array_push($n_csv_array, $n_res_array);
	}


//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★END 商品データ取得★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■



//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★商品データ CSVへ書き込み★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
	// var_dump($n_csv_array);
	//該当ファイルオープン
	$n_csv_file_name = './download/nyuukayotei.csv';
	$n_fp = fopen($n_csv_file_name,'w');
	if ($n_fp === FALSE) {
		throw new Exception('ファイルの書き込みに失敗しました。');
	}
	$n_fput_i = 1;

	foreach($n_csv_array as $n_csvset){
		for ($n_i=0; $n_i < count($n_csvset); $n_i++) {
			$n_csvset[$n_i] = mb_convert_encoding($n_csvset[$n_i],"SJIS");
		}
	  if(fputcsv($n_fp, $n_csvset)){
	  	print("nyuukayotei.csv{$n_fput_i}行目完了<br><pre class='result_set_pre'>");
	  	// var_dump($n_csvset);
	  	print("</pre>");
	  }else{
	  	print("nyuukayotei.csv{$n_fput_i}行目書き込み失敗しました。<br>失敗データ↓<br><pre class='result_set_pre'>");
	  	// var_dump($n_csvset);
	  	print "環境依存文字が使われている可能性があります。";
	  	// print "失敗SEQ　".$n_csvset[8];
	  	print("</pre>");
	  	fclose($n_fp);
	  	exit();
	  }
	  $n_fput_i++;
	}
	fclose($n_fp);

	//リセット
	$n_fput_i = 0;
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★END 商品データ CSVへ書き込み★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■

