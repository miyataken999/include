<?
// header("content-type:text/csv; charset=utf-8;");
header("content-type:text/html; charset=utf-8;");
mb_internal_encoding("utf8");
// ini_set("display_errors",1);

//ログイン認証
include_once $_SERVER["DOCUMENT_ROOT"]."/include/login/login.php";

include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";



//出力項目の設定
$csv = array();
// $csv['ID 連番'] = "product_id";

$csv['コントロールカラム'] = "control";
$csv['在庫数'] = "zaiko";

$csv['商品番号'] = "yahoo_sinaban";
// $csv['大カテ'] = "category_id";
// $csv['大カテ(日本語変換後)'] = "category_id_wamei";
// $csv['中カテ'] = "sub_category_id1";
$csv['アイテム'] = "sub_category_id1_wamei";
$csv['販売価格'] = "sales_price";
$csv['ブランド'] = "yahoo_junle";
$csv['対象'] = "yahoo_sex";

$csv['刻印'] = "stamp";
$csv['型番'] = "yahoo_kataban";
$csv['製造番号'] = "serial_number";
$csv['素材3'] = "yahoo_sozai";
$csv['カラー3'] = "yahoo_color";
$csv['サイズ詳細'] = "yahoo_size";//新規追加した
$csv['ランク'] = "yahoo_condition2";
$csv['全体コンディション詳細'] = "yahoo_condition1";
$csv['詳細備考'] = "remark";
$csv['付属品その他'] = "yahoo_fuzokuhin";
$csv['季節・シーズン'] = "season";
$csv['ヤフオク｜商品名'] = "yahoo_title";
$csv['楽天｜商品名'] = "raku_title";
$csv['ヤフオク｜アイテム名'] = "goods_title";//新規追加した
$csv['保管場所'] = "hokan_place";
$csv['参考上代'] = "yahoo_sankou_uwadai";//新規追加した
$csv['ストア内検索キーワード'] = "search_keyword";//新規追加した
$csv['楽天タグID'] = "raku_tag_result";//新規追加した


$csv['画像ボックス名'] = "box_id";//新規追加した


// あとで 何に合わせたらいいか確認する
// $csv['楽天店舗内カテゴリ1'] = "raku_hyoujisaki_category";
// $csv['楽天店舗内カテゴリ2'] = "raku_hyoujisaki_category2";
// $csv['楽天店舗内カテゴリ3'] = "raku_hyoujisaki_category3";
// $csv['楽天店舗内カテゴリ4'] = "raku_hyoujisaki_category4";
// $csv['楽天店舗内カテゴリ5'] = "raku_hyoujisaki_category5";

//CSV反映なし
$csv['A保管'] = "A_storage";

$koumoku_name = array();
$koumoku_key = array();
$sql_key = "";
foreach ($csv as $key => $value) {
	//CSV反映なしのif
	if($value != "A_storage"){
		$koumoku_name[] = $key;
		$koumoku_key[] = $value;
	}


	// if(($value != "category_id_wamei") AND ($value != "sub_category_id1_wamei")){
	// 	$sql_key ? $sql_key .= ",".$value : $sql_key .= $value;
	// }
	if($value == "category_id_wamei"){
		$sql_key ? $sql_key .= ",category_id" : $sql_key .= "category_id";
	}elseif($value == "sub_category_id1_wamei"){
		$sql_key ? $sql_key .= ",sub_category_id1" : $sql_key .= "sub_category_id1";
	}elseif(($value == "hokan_place") OR ($value == "control") OR ($value == "zaiko")){
		//なし
	}else{
		$sql_key ? $sql_key .= ",".$value : $sql_key .= $value;
	}




}

// $csv_array = array($koumoku_name,$koumoku_key);
$csv_array = array($koumoku_name);



$categori_array = array(10,17,18,19,20,21,22,23);


// $query = "SELECT {$sql_key} FROM shouhin WHERE `status`=107 ORDER BY product_id DESC ";
$query = "SELECT {$sql_key} FROM shouhin WHERE product_id=198215";
// $query = "SELECT {$sql_key} FROM shouhin WHERE `status`=10 ORDER BY product_id DESC LIMIT 100,100";
// print $query;
$sql = mysql_query('SET NAMES utf8');
$sql = mysql_query($query);
while ($res = mysql_fetch_assoc($sql)) {
	$res_array = "";
	for ($i=0; $i < count($koumoku_key); $i++) {
		$result = "";//初期化
		if($koumoku_key[$i] == "category_id_wamei"){
			$dai_query = "SELECT category_name FROM store_categories WHERE category_id={$res['category_id']} LIMIT 1";
			// print $dai_query;
			$dai_sql = mysql_query('SET NAMES utf8');
			$dai_sql = mysql_query($dai_query);
			$dai_res = mysql_fetch_assoc($dai_sql);
			$result = $dai_res['category_name'];
// mysql_error();
		}elseif($koumoku_key[$i] == "sub_category_id1_wamei"){
			$sub_query = "SELECT name FROM store_sub_categories WHERE id={$res['sub_category_id1']} LIMIT 1";
			// print $sub_query;
			$sub_sql = mysql_query('SET NAMES utf8');
			$sub_sql = mysql_query($sub_query);
			$sub_res = mysql_fetch_assoc($sub_sql);
			$result = $sub_res['name'];
		}elseif($koumoku_key[$i] == "hokan_place"){
			if(in_array($res['category_id'],$categori)){
				$result = "社内";
			}elseif($res['A_storage'] == 1){
				$result = "社内";
			}else{
				$result = "清長";
			}
		}elseif($koumoku_key[$i] == "control"){
			$result = "n";
		}elseif($koumoku_key[$i] == "zaiko"){
			$result = "0";
		}elseif($koumoku_key[$i] == "yahoo_sex"){
			if($res[$koumoku_key[$i]] == 1){
				$result = "メンズ";
			}elseif($res[$koumoku_key[$i]] == 2){
				$result = "レディース";
			}else{
				$result = "ユニセックス";
			}
		}elseif($koumoku_key[$i] == "box_id"){
			$box_id = $res[$koumoku_key[$i]];
			$box_data = mysql_fetch_array(mysql_query("select * from box where box_id='$box_id'"));
			$result = $box_data["raku_image_name"];
		}else{
			$result = $res[$koumoku_key[$i]];
		}
		$res_array[$i] = $result;
	}
	array_push($csv_array, $res_array);
}












include $_SERVER["DOCUMENT_ROOT"]."/include/close_connection.php";

// var_dump($csv_array);
//該当ファイルオープン
$fp = fopen('./item.csv','w');
if ($fp === FALSE) {
	throw new Exception('ファイルの書き込みに失敗しました。');
}



//何行目かの値
$fput_i = 1;

foreach($csv_array as $csvset){
	for ($i=0; $i < count($csvset); $i++) {
		$csvset[$i] = mb_convert_encoding($csvset[$i],"SJIS");
	}
  if(fputcsv($fp, $csvset)){
  	// print("item.csv{$fput_i}行目完了<br><pre class='result_set_pre'>");
  	// var_dump($csvset);
  	// print("</pre>");
  }else{
  	// print("item.csv{$fput_i}行目書き込み失敗しました。<br>失敗データ↓<br><pre class='result_set_pre'>");
  	// // var_dump($csvset);
  	// print "環境依存文字が使われている可能性があります。";
  	// // print "失敗SEQ　".$csvset[8];
  	// print("</pre>");
  	fclose($fp);
  	exit();
  }
  $fput_i++;
}
fclose($fp);

//リセット
$fput_i = 0;

download_file("./item.csv");

function download_file($path_file)
{

    /* ファイルサイズの確認 */
    if (($content_length = filesize($path_file)) == 0) {
        die("Error: File size is 0.(".$path_file.")");
    }

    /* ダウンロード用のHTTPヘッダ送信 */
    header("Content-Disposition: inline; filename=\"".basename($path_file)."\"");
    header("Content-Length: ".$content_length);
    header("Content-Type: application/octet-stream");

    /* ファイルを読んで出力 */
    if (!readfile($path_file)) {
        die("Cannot read the file(".$path_file.")");
    }




}


?>
