<?
//ログイン認証
include_once $_SERVER["DOCUMENT_ROOT"]."/include/login/login.php";

//出力項目の設定
$csv = array();

$csv['型番'] = "kotei";//1390000000000
$csv['商品名'] = "raku_title";
$csv['ふりがな'] = "raku_title";
$csv['メモ'] = "kotei";
$csv['シーズン年'] = "kotei";
$csv['シーズンid'] = "kotei";
$csv['入数'] = "kotei";
$csv['形式/型番'] = "yahoo_sinaban";
if(!empty($_GET["add_seq"])) {
	$csv['SEQ'] = "product_id";
}
$csv['服種区分'] = "kotei";
$csv['仕入区分'] = "kotei";
$csv['出荷形態区分'] = "kotei";
$csv['区分1'] = "kotei";
$csv['区分2'] = "kotei";
$csv['区分3'] = "kotei";//1
$csv['区分4'] = "kotei";
$csv['区分5'] = "kotei";
$csv['区分6'] = "kotei";
$csv['区分7'] = "kotei";
$csv['大分類'] = "kotei";
$csv['中分類'] = "kotei";
$csv['小分類'] = "kotei";
$csv['取引先id'] = "kotei";//1
$csv['設定上代'] = "sales_price";
$csv['仕入単価'] = "kotei";//0
$csv['サイズid'] = "kotei";//0
$csv['色id'] = "kotei";//0

$koumoku_name = array();
$koumoku_key = array();
$sql_key = "";
foreach ($csv as $key => $value) {
	$koumoku_name[] = $key;
	$koumoku_key[] = $value;

	if($value == "kotei"){
		//なし
	}else{
		$sql_key ? $sql_key .= ",".$value : $sql_key .= $value;
	}
}

$csv_array = array($koumoku_name);
$categori_array = array(10,17,18,19,20,21,22,23,24,25,26,27,28,50,51);
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
		$query = "SELECT {$sql_key} FROM shouhin WHERE product_id IN ({$product_ids}) {$not_cate}";
	}elseif($product_id != ""){
		$query = "SELECT {$sql_key} FROM shouhin WHERE product_id={$product_id} {$not_cate}";
	}elseif($ws_import_date != ""){
		$query = "SELECT {$sql_key} FROM shouhin WHERE ws_import_date='{$ws_import_date}' {$not_cate}";
	}elseif($box_id != ""){
		$query = "SELECT {$sql_key} FROM shouhin WHERE box_id='{$box_id}' {$not_cate}";
	}else{
		print "該当なし";
		exit();
	}
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★END 対象のセレクタ指定★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■


//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★商品データ取得★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
	$sql = mysql_query('SET NAMES utf8');
	$sql = mysql_query($query);
	while ($res = mysql_fetch_assoc($sql)) {
		$res_array = "";
		for ($i=0; $i < count($koumoku_key); $i++) {
			$result = "";//初期化
			if($koumoku_key[$i] == "kotei"){
				if($koumoku_name[$i] == "型番"){
					$result = '1390000000000';
				}elseif(($koumoku_name[$i] == "区分3") OR ($koumoku_name[$i] == "取引先id")){
					$result = '1';
				}elseif(($koumoku_name[$i] == "仕入単価") OR ($koumoku_name[$i] == "サイズid") OR ($koumoku_name[$i] == "色id")){
					$result = '0';
				}
			}else{
				$result = $res[$koumoku_key[$i]];
			}
			$res_array[$i] = $result;
		}
		array_push($csv_array, $res_array);
	}


//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★END 商品データ取得★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■



//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★商品データ CSVへ書き込み★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
	// var_dump($csv_array);
	//該当ファイルオープン
	$csv_file_name = './download/logimaster.csv';
	$fp = fopen($csv_file_name,'w');
	if ($fp === FALSE) {
		throw new Exception('ファイルの書き込みに失敗しました。');
	}
	$fput_i = 1;

	foreach($csv_array as $csvset){
		for ($i=0; $i < count($csvset); $i++) {
			$csvset[$i] = mb_convert_encoding($csvset[$i],"SJIS");
		}
	  if(fputcsv($fp, $csvset)){
	  	print("logimaster.csv{$fput_i}行目完了<br><pre class='result_set_pre'>");
	  	// var_dump($csvset);
	  	print("</pre>");
	  }else{
	  	print("logimaster.csv{$fput_i}行目書き込み失敗しました。<br>失敗データ↓<br><pre class='result_set_pre'>");
	  	// var_dump($csvset);
	  	print "環境依存文字が使われている可能性があります。";
	  	// print "失敗SEQ　".$csvset[8];
	  	print("</pre>");
	  	fclose($fp);
	  	exit();
	  }
	  $fput_i++;
	}
	fclose($fp);

	//リセット
	$fput_i = 0;
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★END 商品データ CSVへ書き込み★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■

