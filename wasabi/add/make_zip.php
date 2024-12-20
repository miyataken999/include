<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>WSデータZIP作成専用ページ</title>
	<link rel="stylesheet" href="">
</head>
<body>

<?
// header("content-type:text/csv; charset=utf-8;");
// header("content-type:text/html; charset=utf-8;");
mb_internal_encoding("utf-8");
// ini_set("display_errors",1);

//ログイン認証
include_once $_SERVER["DOCUMENT_ROOT"]."/include/login/login.php";

include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";



//出力項目の設定
$csv = array();
$csv['コントロールカラム'] = "control";
$csv['在庫数'] = "zaiko";
$csv['商品番号'] = "yahoo_sinaban";
$csv['販売価格'] = "sales_price";
$csv['ボックスID'] = "box_id";
$csv['楽天｜商品名'] = "raku_title";
$csv['保管場所'] = "hokan_place";
$csv['登録日'] = "up_date";
$up_date = date("Y-m-d");

$csv['SEQ'] = "product_id";//新規追加した
$csv['ラウンジ品番'] = "yahoo_sinaban";//新規追加した


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

	if(($value == "hokan_place") OR ($value == "control") OR ($value == "zaiko") OR ($value == "up_date")){
		//なし
	}else{
		$sql_key ? $sql_key .= ",".$value : $sql_key .= $value;
	}
}
$sql_key = $sql_key.",category_id,ws_import_date";
$csv_array = array($koumoku_name);
$categori_array = array(10,17,18,19,20,21,22,23,24,25,26,27,28,50,51);

//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★対象のセレクタ指定★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
	$box_id = htmlspecialchars($_GET["box_id"]);//box_id
	if($box_id == ""){
		// $box_id = 5166;
		$box_id = 5170;
	}
	// $query = "SELECT {$sql_key} FROM shouhin WHERE `status`=107 ORDER BY product_id DESC ";
	$query = "SELECT {$sql_key} FROM shouhin WHERE box_id={$box_id}";
	// $query = "SELECT {$sql_key} FROM shouhin WHERE `status`=10 ORDER BY product_id DESC LIMIT 100,100";
	// print $query;
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
			if($koumoku_key[$i] == "control"){
				$result = "n";
			}elseif($koumoku_key[$i] == "zaiko"){
				$result = "1";
			}elseif($koumoku_key[$i] == "hokan_place"){
				if(in_array($res['category_id'],$categori_array)){
					$result = "社内";
				}elseif($res['A_storage'] == 1){
					$result = "社内";
				}else{
					$result = "清長";
				}
			}elseif($koumoku_key[$i] == "up_date"){
				$result = $up_date;
			}else{
				$result = $res[$koumoku_key[$i]];
			}
			$res_array[$i] = $result;
		}
		array_push($csv_array, $res_array);
		$product_id = $res["product_id"];
		$ws_import_date = $res["ws_import_date"];
		if($ws_import_date == ""){
			if($product_id != ""){
				$up_query = "UPDATE shouhin SET ws_import_date='{$up_date}' WHERE product_id={$product_id}";
				mysql_query($up_query);
			}
		}
	}
	//+++++++++++++++++++++++++++++++++++++++
	//box_idから、box_nameを取得
	//+++++++++++++++++++++++++++++++++++++++
	$box_query = " SELECT box_name FROM box WHERE box_id={$box_id} LIMIT 1";
	$box_sql = mysql_query('SET NAMES utf8');
	$box_sql = mysql_query($box_query);
	$box_result = mysql_fetch_assoc($box_sql);
	$box_name = $box_result["box_name"];


//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★END 商品データ取得★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■



//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★商品データ CSVへ書き込み★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
	// var_dump($csv_array);
	//該当ファイルオープン
	$csv_file_name = './download/item_up.csv';
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
	  	print("item_up.csv{$fput_i}行目完了<br><pre class='result_set_pre'>");
	  	// var_dump($csvset);
	  	print("</pre>");
	  }else{
	  	print("item_up.csv{$fput_i}行目書き込み失敗しました。<br>失敗データ↓<br><pre class='result_set_pre'>");
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


//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//★★----------危険 削除コマンド-----★★
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
// ZIP削除
$path_file = "./download/*.zip";
$listfile = system("rm {$path_file}", $rtf);
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//★★----------危険 削除コマンド-----★★
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★

//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★画像 一時的にコピー★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■

$listfile = system("cp /var/www/html/shop/services/image/{$box_name}/{$box_name}/*.jpg ./download/tmp/ ",$ret);
//パーミッション変更
$chmod = system("chmod 777 ./download/tmp/*.jpg ",$ret);
//リネーム
// $rename = system("rename _ - ./download/tmp/*.jpg ",$ret);

//ファイル名をSEQ⇒品番に変更。管理番号をSEQにしたら戻す。
// ディレクトリのパス
$dir = "./download/tmp/" ;
if( is_dir( $dir ) && $handle = opendir( $dir ) ) {
	while( ($file = readdir($handle)) !== false ) {
		if( filetype( $path = $dir . $file ) == "file" ) {
			$fileNameArray = "";
			$fileId = "";

			// $fileNameArray = explode("-", $file);
			$fileNameArray = explode("_", $file);
			$fileId = $fileNameArray[0];
			$query = " SELECT yahoo_sinaban FROM shouhin WHERE product_id={$fileId} LIMIT 1";
			$sql = mysql_query('SET NAMES utf8');
			$sql = mysql_query($query);
			$result = mysql_fetch_assoc($sql);
			$yahoo_sinaban = $result["yahoo_sinaban"];
			$rename = system("rename {$fileId} {$yahoo_sinaban} ./download/tmp/{$fileId}_*.jpg ",$ret);
		  // $file: ファイル名
		  // $path: ファイルのパス
		}
	}
}





include $_SERVER["DOCUMENT_ROOT"]."/include/close_connection.php";
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★END 画像 一時的にコピー★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■


//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★CSV ZIPに追加★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
$zip_name = "ws";
$zip_path  = "./download/{$zip_name}.zip";
$zip = system("zip {$zip_path} ./download/*.csv ./download/tmp/*.jpg ", $re_rakuten_zip); //{$box_name}/
$zip = system("chmod -R 777 download/{$zip_name}.zip ", $re_rakuten_zip_mod);


//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★END CSV ZIPに追加★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■


//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//★★----------危険 削除コマンド-----★★
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//一時退避した画像を削除
$path_file = "./download/tmp/*.jpg";
$listfile = system("rm {$path_file}", $rtf);
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//★★----------危険 削除コマンド-----★★
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★





?>

ZIP作成成功しました。ダウンロードページへ移動します(^-^)
<script type="text/javascript">
	window.location = ("./download.php");
</script>

</body>
</html>
