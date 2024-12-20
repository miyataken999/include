<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>

<?
include_once $_SERVER["DOCUMENT_ROOT"]."/include/function/keep_price.php";


mb_internal_encoding("utf-8");

$all_res = array();
$res = array();

$res[] = "コントロールカラム";
$res[] = "商品番号";
$res[] = "ヤフオク｜商品名";
$res[] = "楽天｜商品名";
$res[] = "販売価格";
$res[] = "販売開始日時";
$res[] = "販売終了日時";
$res[] = "タイトル文言";
$res[] = "自動値下げ対象外";
$res[] = "仕入価格";
$res[] = "ebay上乗せ金額";
// $categori_array = array(10,17,18,19,20,21,22,23,24,25,26,27,28,50,51);
// 大カテ追加 20201215
$categori_array = array(10,17,18,19,20,21,22,23,24,25,26,27,28,50,51,65,66,67,68);


$all_res[] = $res;

$res = "";

// ebay設定
$ebay_query = "SELECT `category_id`,`sub_category_id`,`price`,`not_exhibition` FROM mst_ebay_price ";
$ebay_sql = mysql_query($ebay_query);
$ebay_array = array();
while($ebay_data = mysql_fetch_assoc($ebay_sql)){
	$category_id = $ebay_data["category_id"];
	$sub_category_id = $ebay_data["sub_category_id"];
	if($ebay_data["not_exhibition"] == 1){
		$ebay_val = '出品禁止';
	}elseif($ebay_data["price"] != ''){
		$ebay_val = $ebay_data["price"];
	}else{
		$ebay_val = 'このカテゴリーの上乗せ金額がマスタ設定されていません。';
	}
	if($sub_category_id != ''){
		$ebay_array["sub_category_id_".$sub_category_id] = $ebay_val;
	}elseif($category_id != ''){
		$ebay_array["category_id_".$category_id] = $ebay_val;
	}
}
// end ebay設定

var_dump($ebay_array);

foreach ($_POST as $key => $value) {
	$value = str_replace("\n","",$value);
	$keyArray = explode("###", $key);
	$key = $keyArray[1];
// print $key."<br>";
	if($key == "product_id"){
		$shouhin_query = "SELECT `category_id`,`sub_category_id1` FROM shouhin WHERE product_id={$value} limit 1";
		$shouhin_sql = mysql_query($shouhin_query);
		$shouhin_data = mysql_fetch_assoc($shouhin_sql);
		$category_id = $shouhin_data["category_id"];
		$sub_category_id1 = $shouhin_data["sub_category_id1"];

		echo "<br><br>";
		var_dump($shouhin_data);

		if($ebay_array["sub_category_id_".$sub_category_id1] != ''){
			$res[10] = $ebay_array["sub_category_id_".$sub_category_id1];
		}elseif($ebay_array["category_id_".$category_id] != ''){
			$res[10] = $ebay_array["category_id_".$category_id];
		}else{
			$res[10] = 'このカテゴリーはマスタ設定されていません。';
		}
		echo "<br><br>{$res[10]}";

		$baihen_kinshi_days = baihen_kinshi_days($value);
		if($baihen_kinshi_days > 0){
			// 20190828 停止
			// 20191226 再開
			$res[8] = 1;
			// $res[8] = 0;
		}else{
			// 20200312 全て禁止フラグたてる
			// $res[8] = 0;
			$res[8] = 1;
		}
		$query = "UPDATE shouhin SET days_keep_price = '{$baihen_kinshi_days}' WHERE product_id='{$value}' AND `status`!=10 limit 1";

		try {
			mysql_query($query);
		} catch (Exception $e) {
			echo "失敗しました。";
			echo $e->getMessage();
			exit();
		}

		continue;
	}elseif($key == "category_id"){
		$category_id = $value;
		continue;
	}elseif($key == "yahoo_sinaban"){
		$res[1] = $value;
	}elseif($key == "Title"){
		$res[2] = $value;
	}elseif($key == "Starting_price"){
		$res[4] = $value;
	}elseif($key == "raku_title"){
		$res[3] = $value;
	}elseif($key == "itaku_flag"){
		if($value == '1'){
			$itaku_flag = 'on';
		}else{
			$itaku_flag = '';
		}
	}elseif($key == "auto_price_cut_prohibited"){
    $auto_price_cut_prohibited =$value;
  }elseif($key == "price"){
     $price = $value;
  }elseif($key == "cost"){
     $cost = $value;
	}elseif($key == "identification_cost"){
		$identification_cost = $value;
	}elseif($key == "other_cost"){
		$other_cost = $value;
	}elseif($key == "lastflag"){
		$resres[] = "u";
		$resres[] = $res[1];
		$resres[] = $res[2];

		if($res[8] == 1){
			$res[3] = str_replace("■","★■",$res[3]);
		}
		$resres[] = $res[3];

		$resres[] = $res[4];
		$saleStart = $_POST["saleStart"];
		$saleStart = str_replace("-","/",$saleStart);
		$saleStart = str_replace("T"," ",$saleStart);
		$resres[] = $saleStart;
		$saleEnd = $_POST["saleEnd"];
		$saleEnd = str_replace("-","/",$saleEnd);
		$saleEnd = str_replace("T"," ",$saleEnd);
		$resres[] = $saleEnd;

		//タイトル文言の生成
		if(in_array($category_id,$categori_array)){
			$title_mongon_cate = "h";
		}else{
			$title_mongon_cate = "b";
		}

		if($itaku_flag == 'on'){
			$title_mongon_cate = "i";
			$res[8] = 1;
		}
		if($auto_price_cut_prohibited==1){
      $res[8] = 1;
    }
		$title_mongon = date("Y",strtotime($saleStart))-2000;
		$title_mongon = $title_mongon_cate.$title_mongon.date("md",strtotime($saleStart));
		$resres[] = $title_mongon;

		$resres[] = $res[8];// 空欄【自動値下げ対象外】
		$res[9] = $price+$cost+$identification_cost+$other_cost;
		$resres[] = $res[9];
		$resres[] = $res[10];
		$all_res[] = $resres;
		$res = "";
		$resres = "";
	}else{
		continue;
	}

}

// var_dump($all_res);

// exit();
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★商品データ CSVへ書き込み★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
	// var_dump($csv_array);
	//該当ファイルオープン
	$csv_file_name = './shuppin.csv';
	$fp = fopen($csv_file_name,'w');
	if ($fp === FALSE) {
		throw new Exception('ファイルの書き込みに失敗しました。');
	}
	$fput_i = 1;

	foreach($all_res as $csvset){
		for ($i=0; $i < count($csvset); $i++) {
			$csvset[$i] = mb_convert_encoding($csvset[$i],"SJIS");
		}
	  if(fputcsv($fp, $csvset)){
	  	print("item_edit.csv{$fput_i}行目完了<br><pre class='result_set_pre'>");
	  	// var_dump($csvset);
	  	print("</pre>");
	  }else{
	  	print("item_edit.csv{$fput_i}行目書き込み失敗しました。<br>失敗データ↓<br><pre class='result_set_pre'>");
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


?>

ZIP作成成功しました。ダウンロードページへ移動します(^-^)
<script type="text/javascript">
	window.location = ("./download.php");
</script>

</body>
</html>
