<?
// ini_set('display_errors', 1);
mb_internal_encoding("utf-8");

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
$categori_array = array(10,17,18,19,20,21,22,23,24,25,26,27,28);

//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★対象のセレクタ指定★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
	// $product_id = htmlspecialchars($_GET["product_id"]);//product_id
	if($product_id == ""){
		// $product_id = 5166;
		$product_id = 199555;
	}
	// $query = "SELECT {$sql_key} FROM shouhin WHERE `status`=107 ORDER BY product_id DESC ";
	$query = "SELECT {$sql_key} FROM shouhin WHERE product_id={$product_id}";
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
		$ws_import_date = $res["ws_import_date"];
		$yahoo_sinaban = $res["yahoo_sinaban"];

		if($ws_import_date == ""){
			if($product_id != ""){
				// $up_query = "UPDATE shouhin SET ws_import_date='{$up_date}' WHERE product_id={$product_id}";
				// mysql_query($up_query);
			}
		}
	}


//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★END 商品データ取得★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■



//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★商品データ CSVへ書き込み★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
	// var_dump($csv_array);
	//該当ファイルオープン
	$upload_file = "./up/{$product_id}.csv";

	$data = "";
	$num = 0;
	foreach($csv_array as $csvset){
		for ($i=0; $i < count($csvset); $i++) {
			if($num == 0){
				$data .= mb_convert_encoding($csvset[$i],"SJIS");
			}else{
				$data .= ",".mb_convert_encoding($csvset[$i],"SJIS");
			}
			$num++;
		}
		$data .= "\n";
		$num = 0;
	}
	file_put_contents($upload_file, $data);

//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★END 商品データ CSVへ書き込み★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■

















$ftpValue = array(
    'ftp_server' => 'ftp.world-switch.com',
    'ftp_user_name' => 'lounge',
    'ftp_user_pass' => 'U0WMAdpkO3v3zWry'
);
$remote_file = "./{$yahoo_sinaban}.csv";

$connection = ftp_connect($ftpValue['ftp_server'],8021,3) or die("Couldn't connect to ".$ftpValue['ftp_server']);

$login_result = ftp_login(
    $connection,
    $ftpValue['ftp_user_name'],
    $ftpValue['ftp_user_pass']
);


ftp_pasv($connection, true);

if (ftp_put($connection, $remote_file, $upload_file, FTP_ASCII)) {
 // echo "successfully";
} else {
 // echo "none";
}


ftp_close($connection);

?>
